<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PromoApplication;
use App\Models\User;
use App\Services\AdminAlertService;
use App\Services\PromoEngine;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class OrderController extends Controller
{
    // ── Form Pre-Order ────────────────────────────────────────────────────────

    public function create(): View
    {
        $now = now(); // Asia/Jakarta (sesuai config/app.php)
        $openAt = Carbon::today()->setHour(7)->setMinute(0)->setSecond(0);
        $orderOpen = $now->gte($openAt);

        $breakTimes = BreakTime::orderBy('start_time')->get();
        $menus = Menu::with('category')
            ->where('stock', '>', 0)
            ->orderBy('category_id')
            ->get()
            ->groupBy('category.name');

        return view('user.orders.create', compact('breakTimes', 'menus', 'now', 'orderOpen'));
    }

    // ── Proses Simpan Pesanan ─────────────────────────────────────────────────

    /**
     * Alur keamanan double-spend:
     *  1. Pre-check cepat (stale ok) untuk UX — tampilkan error awal sebelum DB
     *  2. DB::transaction:
     *       a. lockForUpdate pada baris menu   → cegah race pada stok
     *       b. lockForUpdate pada baris user    → cegah double-spend saldo
     *       c. Re-validasi ketersediaan & saldo dengan data terkunci
     *       d. Buat Order + OrderItems + potong saldo + catat BalanceTransaction
     */
    public function store(StoreOrderRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();
        $user = $request->user();
        $requestedIds = collect($validated['items'])->pluck('menu_id')->unique();

        // ── Idempotency: if a key was sent, check if we already processed it ─
        $idempotencyKey = $validated['idempotency_key'] ?? null;
        if ($idempotencyKey) {
            $existing = Order::where('user_id', $user->id)
                ->where('idempotency_key', $idempotencyKey)
                ->first();
            if ($existing) {
                // Return the existing order — same key means same request replayed
                if ($request->wantsJson()) {
                    return response()->json([
                        'status' => 'ok',
                        'duplicate' => true,
                        'order_id' => $existing->id,
                        'redirect_url' => route('user.orders.show', $existing),
                    ]);
                }

                return redirect()->route('user.orders.show', $existing)
                    ->with('success', 'Pesanan #'.$existing->id.' sudah dibuat sebelumnya.');
            }
        }

        // ── Pre-check: jam buka pemesanan (07:00) ────────────────────────
        $openAt = Carbon::today()->setHour(7)->setMinute(0)->setSecond(0);
        if (now()->lt($openAt)) {
            return back()
                ->with('error', 'Pemesanan baru dibuka pukul 07:00 WIB.')
                ->withInput();
        }

        // ── Pre-check: deadline break time yang dipilih ──────────────────
        $selectedBreakTime = BreakTime::find($validated['break_time_id']);
        if ($selectedBreakTime && ! $selectedBreakTime->canOrder()) {
            return back()
                ->with('error',
                    "Batas waktu pre-order untuk {$selectedBreakTime->label} sudah lewat ".
                    "(deadline: {$selectedBreakTime->deadlineToday()->format('H:i')} WIB). ".
                    'Silakan pilih slot istirahat berikutnya.')
                ->withInput();
        }

        $menuMapPrecheck = Menu::whereIn('id', $requestedIds)
            ->where('stock', '>', 0)
            ->get()
            ->keyBy('id');

        $missingIds = $requestedIds->filter(fn ($id) => ! $menuMapPrecheck->has($id));
        if ($missingIds->isNotEmpty()) {
            return back()
                ->with('error', 'Beberapa menu sudah habis atau tidak tersedia. Silakan periksa kembali pilihan Anda.')
                ->withInput();
        }

        // Pre-check stok per item (UX only)
        foreach ($validated['items'] as $item) {
            $menu = $menuMapPrecheck[$item['menu_id']];
            if ($menu->stock < $item['quantity']) {
                return back()
                    ->with('error', "Stok \"{$menu->name}\" tidak mencukupi. Sisa stok: {$menu->stock}.")
                    ->withInput();
            }
        }

        $estimatedTotal = collect($validated['items'])->sum(
            fn ($item) => $menuMapPrecheck[$item['menu_id']]->price * $item['quantity']
        );

        if ((float) $user->balance < $estimatedTotal) {
            $kekurangan = $estimatedTotal - $user->balance;

            return back()
                ->with('error',
                    'Saldo tidak mencukupi. '.
                    'Total pesanan: Rp '.number_format($estimatedTotal, 0, ',', '.').' | '.
                    'Saldo Anda: Rp '.number_format($user->balance, 0, ',', '.').' | '.
                    'Kekurangan: Rp '.number_format($kekurangan, 0, ',', '.')
                )
                ->withInput();
        }

        // ── Authoritative transaction dengan row-level lock ───────────────────
        $order = null;
        $errorMsg = null;

        DB::transaction(function () use ($user, $validated, $requestedIds, $idempotencyKey, &$order, &$errorMsg) {

            // ── Authoritative time check (dalam transaction — cegah race condition di boundary) ──
            $openAt = Carbon::today()->setHour(7)->setMinute(0)->setSecond(0);
            if (now()->lt($openAt)) {
                $errorMsg = 'Pemesanan baru dibuka pukul 07:00 WIB.';

                return;
            }
            $btCheck = BreakTime::find($validated['break_time_id']);
            if ($btCheck && now()->gt($btCheck->deadlineToday())) {
                $errorMsg = "Batas waktu pre-order untuk {$btCheck->label} sudah lewat ".
                            "(deadline: {$btCheck->deadlineToday()->format('H:i')} WIB).";

                return;
            }

            // a. Re-baca menu dengan lock (authoritative — cegah race pada stok)
            $menuMap = Menu::whereIn('id', $requestedIds)
                ->where('stock', '>', 0)
                ->lockForUpdate()
                ->get()
                ->keyBy('id');

            $unavailable = $requestedIds->filter(fn ($id) => ! $menuMap->has($id));
            if ($unavailable->isNotEmpty()) {
                $errorMsg = 'Beberapa menu sudah habis saat pesanan diproses. Silakan coba lagi.';

                return;
            }

            // Cek stok per item (authoritative — data sudah di-lock)
            foreach ($validated['items'] as $item) {
                $menu = $menuMap[$item['menu_id']];
                if ($menu->stock < $item['quantity']) {
                    $errorMsg = "Stok \"{$menu->name}\" tidak mencukupi. ".
                                "Sisa stok: {$menu->stock}, diminta: {$item['quantity']}.";

                    return;
                }
            }

            // Hitung total final dari harga yang sudah dikunci
            $rawTotal = collect($validated['items'])->sum(
                fn ($item) => $menuMap[$item['menu_id']]->price * $item['quantity']
            );

            // Evaluasi promosi yang berlaku
            $cartItems = collect($validated['items'])->map(
                fn ($item) => [
                    'menu_id' => $item['menu_id'],
                    'price' => (float) $menuMap[$item['menu_id']]->price,
                    'quantity' => (int) $item['quantity'],
                ]
            );
            $promoResult = (new PromoEngine)->evaluate($cartItems);
            $totalPrice = max(0, $rawTotal - $promoResult->discountAmount);

            // b. Re-baca saldo user dengan lock (authoritative — cegah double-spend)
            $freshUser = User::lockForUpdate()->findOrFail($user->id);
            $balanceBefore = (float) $freshUser->balance;

            if ($balanceBefore < $totalPrice) {
                $kekurangan = $totalPrice - $balanceBefore;
                $errorMsg = 'Saldo tidak mencukupi saat pesanan diproses. '.
                              'Saldo saat ini: Rp '.number_format($balanceBefore, 0, ',', '.').' | '.
                              'Kekurangan: Rp '.number_format($kekurangan, 0, ',', '.');

                return;
            }

            // c. Buat pesanan
            $order = Order::create([
                'user_id' => $freshUser->id,
                'break_time_id' => $validated['break_time_id'],
                'status' => Order::STATUS_PREPARING,
                'total_price' => $totalPrice,
                'discount_amount' => $promoResult->discountAmount,
                'promo_ids' => $promoResult->appliedIds(),
                'note' => $validated['note'] ?? null,
                'ordered_at' => now(),
                'idempotency_key' => $idempotencyKey ?? null,
            ]);

            // d. Buat order items (snapshot nama & harga saat pemesanan)
            $orderItems = collect($validated['items'])->map(function ($item) use ($order, $menuMap) {
                $menu = $menuMap[$item['menu_id']];

                return [
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'menu_name' => $menu->name,
                    'menu_price' => $menu->price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $menu->price * $item['quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })->toArray();

            OrderItem::insert($orderItems);

            // f. Kurangi stok menu sesuai quantity yang dipesan (atomic — dalam transaction)
            foreach ($validated['items'] as $item) {
                Menu::where('id', $item['menu_id'])
                    ->decrement('stock', $item['quantity']);
            }

            // g. Potong saldo user
            $balanceAfter = $balanceBefore - $totalPrice;
            $freshUser->update(['balance' => $balanceAfter]);

            // h. Catat mutasi saldo (debit)
            BalanceTransaction::create([
                'user_id' => $freshUser->id,
                'order_id' => $order->id,
                'type' => BalanceTransaction::TYPE_DEBIT,
                'amount' => $totalPrice,
                'balance_before' => $balanceBefore,
                'balance_after' => $balanceAfter,
                'description' => "Pembayaran pesanan #{$order->id}",
            ]);

            // i. Catat promo yang diterapkan (audit trail)
            foreach ($promoResult->appliedPromos as $promo) {
                $promoDiscount = (new PromoEngine)->calculateSingleDiscount($promo, $rawTotal, $cartItems);
                PromoApplication::create([
                    'order_id' => $order->id,
                    'promotion_id' => $promo->id,
                    'discount_amount' => $promoDiscount,
                    'snapshot' => $promo->params,
                ]);
            }
        });

        // Closure return early berarti ada error
        if ($errorMsg) {
            if ($request->wantsJson()) {
                return response()->json(['status' => 'error', 'message' => $errorMsg], 422);
            }

            return back()->with('error', $errorMsg)->withInput();
        }

        $successMsg = 'Pesanan #'.$order->id.' berhasil dibuat! '.
            'Status: Sedang Disiapkan. '.
            'Saldo dipotong Rp '.number_format($order->total_price, 0, ',', '.').
            ($order->discount_amount > 0
                ? ' (termasuk diskon Rp '.number_format($order->discount_amount, 0, ',', '.').')'
                : '');

        if ($request->wantsJson()) {
            return response()->json([
                'status' => 'ok',
                'duplicate' => false,
                'order_id' => $order->id,
                'redirect_url' => route('user.orders.show', $order),
                'message' => $successMsg,
            ]);
        }

        // Check for order spikes after a successful order
        AdminAlertService::checkOrderSpike();

        event(new \App\Events\OrderCreated($order->fresh(['items.menu', 'user', 'breakTime'])));

        return redirect()->route('user.orders.show', $order)->with('success', $successMsg);
    }

    // ── Riwayat Pesanan ───────────────────────────────────────────────────────

    public function history(Request $request): View
    {
        $orders = Order::with(['breakTime', 'items'])
            ->where('user_id', $request->user()->id)
            ->latest('ordered_at')
            ->paginate(10);

        return view('user.orders.history', compact('orders'));
    }

    // ── Detail Pesanan ────────────────────────────────────────────────────────

    public function show(Order $order): View
    {
        abort_unless($order->user_id === auth()->id(), 403);

        $order->load(['breakTime', 'items', 'orderQr']);

        return view('user.orders.show', compact('order'));
    }

    // ── Cetak QR ──────────────────────────────────────────────────────────────

    public function printQr(Order $order): \Illuminate\View\View
    {
        abort_unless($order->user_id === auth()->id(), 403);
        abort_unless($order->isReady(), 404);

        $order->load(['breakTime', 'items', 'orderQr']);

        // Buat QR baru jika belum ada atau sudah kedaluwarsa
        if (! $order->orderQr || $order->orderQr->isExpired()) {
            $order->generateQr();
            $order->load('orderQr');
        }

        return view('user.orders.qr-print', compact('order'));
    }
}
