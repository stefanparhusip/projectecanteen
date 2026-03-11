<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\Batch;
use App\Models\BatchMember;
use App\Models\BatchMemberItem;
use App\Models\BreakTime;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BatchController extends Controller
{
    // ── Index: my batches + open batches ──────────────────────────────────────

    public function index(): View
    {
        $user = auth()->user();

        $myBatches = Batch::with(['breakTime', 'createdBy', 'members'])
            ->where(function ($q) use ($user) {
                $q->where('created_by_user_id', $user->id)
                    ->orWhereHas('members', fn ($q) => $q->where('user_id', $user->id));
            })
            ->whereNotIn('status', [Batch::STATUS_CANCELLED])
            ->orderByDesc('created_at')
            ->get();

        $breakTimes = BreakTime::orderBy('start_time')->get();

        return view('user.batches.index', compact('myBatches', 'breakTimes'));
    }

    // ── Create ────────────────────────────────────────────────────────────────

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'class_name' => 'required|string|max:100',
            'break_time_id' => 'required|exists:break_times,id',
            'note' => 'nullable|string|max:255',
        ]);

        $batch = Batch::create([
            'class_name' => $validated['class_name'],
            'break_time_id' => $validated['break_time_id'],
            'created_by_user_id' => auth()->id(),
            'code' => strtoupper(Str::random(6)),
            'status' => Batch::STATUS_OPEN,
            'note' => $validated['note'],
        ]);

        // Auto-join creator as first member
        BatchMember::create([
            'batch_id' => $batch->id,
            'user_id' => auth()->id(),
            'subtotal' => 0,
            'payment_status' => 'pending',
        ]);

        return redirect()->route('user.batches.show', $batch)
            ->with('success', "Batch #{$batch->id} dibuat! Kode bergabung: <strong>{$batch->code}</strong>");
    }

    // ── Show detail ───────────────────────────────────────────────────────────

    public function show(Batch $batch): View
    {
        // Non-members may view open batches (before joining)
        if (! $batch->isOpen()) {
            $userId = auth()->id();
            $isMember = BatchMember::where('batch_id', $batch->id)->where('user_id', $userId)->exists();
            $isCreator = $batch->created_by_user_id === $userId;
            abort_unless($isMember || $isCreator, 403);
        }

        $batch->load(['breakTime', 'createdBy', 'members.user', 'members.items']);

        $user = auth()->user();
        $myMember = $batch->members->firstWhere('user_id', $user->id);
        $isCreator = $batch->created_by_user_id === $user->id;
        $isMember = $myMember !== null;

        $menus = $batch->isOpen()
            ? Menu::with('category')
                ->where('stock', '>', 0)
                ->orderBy('category_id')
                ->get()
                ->groupBy(fn ($m) => $m->category?->name ?? 'Lainnya')
            : collect();

        return view('user.batches.show', compact('batch', 'myMember', 'isCreator', 'isMember', 'menus'));
    }

    // ── Join by code (from index page) ────────────────────────────────────────

    public function joinByCode(Request $request): RedirectResponse
    {
        $request->validate(['code' => 'required|string']);

        $batch = Batch::where('code', strtoupper(trim($request->code)))
            ->where('status', Batch::STATUS_OPEN)
            ->first();

        if (! $batch) {
            return back()->with('error', 'Kode batch tidak valid atau batch sudah ditutup.');
        }

        return $this->doJoin($batch);
    }

    // ── Join directly (from show page) ────────────────────────────────────────

    public function join(Batch $batch): RedirectResponse
    {
        abort_unless($batch->isOpen(), 403, 'Batch sudah ditutup untuk anggota baru.');

        return $this->doJoin($batch);
    }

    // ── Leave batch ───────────────────────────────────────────────────────────

    public function leave(Batch $batch): RedirectResponse
    {
        $userId = auth()->id();

        // Creator cannot leave; they must cancel the whole batch
        abort_if($batch->created_by_user_id === $userId, 403, 'Pembuat batch tidak bisa keluar. Batalkan batch jika diperlukan.');
        abort_unless($batch->isOpen(), 403, 'Tidak bisa keluar dari batch yang sudah terkunci atau selesai.');

        BatchMember::where('batch_id', $batch->id)
            ->where('user_id', $userId)
            ->delete();

        return redirect()->route('user.batches.index')
            ->with('success', "Anda keluar dari batch #{$batch->id}.");
    }

    // ── Save my items ─────────────────────────────────────────────────────────

    public function saveItems(Request $request, Batch $batch): RedirectResponse
    {
        abort_unless($batch->isOpen(), 403, 'Batch sudah terkunci, item tidak bisa diubah.');

        $member = BatchMember::where('batch_id', $batch->id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $request->validate([
            'items' => 'nullable|array|max:30',
            'items.*.menu_id' => 'required|integer|exists:menus,id',
            'items.*.quantity' => 'required|integer|min:1|max:99',
        ]);

        $items = collect($request->items ?? []);
        $menuIds = $items->pluck('menu_id')->unique();

        if ($menuIds->isNotEmpty()) {
            $menus = Menu::whereIn('id', $menuIds)->where('stock', '>', 0)->get()->keyBy('id');

            foreach ($items as $item) {
                $menu = $menus->get($item['menu_id']);
                if (! $menu) {
                    return back()->with('error', 'Salah satu menu tidak tersedia atau habis.');
                }
                if ($menu->stock < $item['quantity']) {
                    return back()->with('error', "Stok \"{$menu->name}\" tidak mencukupi ({$menu->stock} tersisa).");
                }
            }
        } else {
            $menus = collect();
        }

        // Replace all items for this member
        $member->items()->delete();

        $subtotal = 0;
        $rows = $items->map(function ($item) use ($menus, $member, &$subtotal) {
            $menu = $menus[$item['menu_id']];
            $lineTotal = $menu->price * $item['quantity'];
            $subtotal += $lineTotal;

            return [
                'batch_member_id' => $member->id,
                'menu_id' => $menu->id,
                'menu_name' => $menu->name,
                'menu_price' => $menu->price,
                'quantity' => $item['quantity'],
                'subtotal' => $lineTotal,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        if (! empty($rows)) {
            BatchMemberItem::insert($rows);
        }

        $member->update(['subtotal' => $subtotal]);

        return redirect()->route('user.batches.show', $batch)
            ->with('success', 'Item Anda telah disimpan.');
    }

    // ── Lock batch (creator only) ─────────────────────────────────────────────

    public function lock(Batch $batch): RedirectResponse
    {
        abort_unless($batch->created_by_user_id === auth()->id(), 403);
        abort_unless($batch->isOpen(), 400, 'Batch tidak dalam status terbuka.');

        $hasItems = $batch->members()->whereHas('items')->exists();
        if (! $hasItems) {
            return back()->with('error', 'Tidak ada anggota yang menambahkan item. Batch tidak bisa dikunci.');
        }

        $batch->update(['status' => Batch::STATUS_LOCKED]);

        return redirect()->route('user.batches.show', $batch)
            ->with('success', 'Batch dikunci. Silakan lanjutkan ke checkout.');
    }

    // ── Checkout page ─────────────────────────────────────────────────────────

    public function checkout(Batch $batch): View
    {
        abort_unless($batch->created_by_user_id === auth()->id(), 403);
        abort_unless($batch->isLocked(), 400, 'Batch belum terkunci.');

        $batch->load(['breakTime', 'createdBy', 'members.user', 'members.items']);

        $activeMembers = $batch->members->where('subtotal', '>', 0);
        $totalPrice = $activeMembers->sum('subtotal');
        $creator = auth()->user()->fresh();

        // Pre-check: which members have insufficient balance (for split bill display)
        $insufficientMembers = $activeMembers->filter(
            fn ($m) => (float) $m->user->balance < (float) $m->subtotal
        );

        return view('user.batches.checkout', compact(
            'batch', 'activeMembers', 'totalPrice', 'creator', 'insufficientMembers'
        ));
    }

    // ── Process checkout ──────────────────────────────────────────────────────

    public function processCheckout(Request $request, Batch $batch): RedirectResponse
    {
        abort_unless($batch->created_by_user_id === auth()->id(), 403);
        abort_unless($batch->isLocked(), 400, 'Batch belum terkunci.');

        $request->validate(['payment_mode' => 'required|in:split,one_pays']);

        $paymentMode = $request->payment_mode;
        $creatorId = auth()->id();
        $error = null;

        DB::transaction(function () use ($batch, $paymentMode, $creatorId, &$error) {

            // Re-lock the batch row to prevent concurrent checkout
            $batch = Batch::lockForUpdate()->findOrFail($batch->id);

            if (! $batch->isLocked()) {
                $error = 'Status batch berubah saat proses. Refresh dan coba lagi.';

                return;
            }

            // Load + lock members and their items
            $members = BatchMember::with('items')
                ->where('batch_id', $batch->id)
                ->get();

            $activeMembers = $members->where('subtotal', '>', 0)->values();
            $totalPrice = (float) $activeMembers->sum('subtotal');

            if ($totalPrice <= 0) {
                $error = 'Tidak ada item untuk di-checkout.';

                return;
            }

            // Aggregate all items per menu_id to check + deduct stock atomically
            $allItems = BatchMemberItem::whereIn('batch_member_id', $activeMembers->pluck('id'))
                ->get()
                ->groupBy('menu_id');

            $menus = Menu::whereIn('id', $allItems->keys())
                ->lockForUpdate()
                ->get()
                ->keyBy('id');

            // ── Stock validation ──────────────────────────────────────────────
            foreach ($allItems as $menuId => $lines) {
                $totalQty = $lines->sum('quantity');
                $menu = $menus->get($menuId);
                if (! $menu || $menu->stock < $totalQty) {
                    $error = "Stok \"{$menu?->name}\" tidak cukup untuk seluruh batch (butuh {$totalQty}, sisa ".($menu?->stock ?? 0).').';

                    return;
                }
            }

            // ── Balance validation ────────────────────────────────────────────
            if ($paymentMode === 'split') {
                foreach ($activeMembers as $member) {
                    $user = User::lockForUpdate()->findOrFail($member->user_id);
                    if ((float) $user->balance < (float) $member->subtotal) {
                        $error = "Saldo {$user->name} tidak cukup (perlu Rp "
                            .number_format($member->subtotal, 0, ',', '.')
                            .', saldo Rp '.number_format($user->balance, 0, ',', '.').').';

                        return;
                    }
                }
            } else {
                $creator = User::lockForUpdate()->findOrFail($creatorId);
                if ((float) $creator->balance < $totalPrice) {
                    $error = 'Saldo Anda tidak cukup untuk membayar seluruh batch (Rp '
                        .number_format($totalPrice, 0, ',', '.').').';

                    return;
                }
            }

            // ── Deduct stock ──────────────────────────────────────────────────
            foreach ($allItems as $menuId => $lines) {
                Menu::where('id', $menuId)->decrement('stock', $lines->sum('quantity'));
            }

            // ── Create one Order per active member ────────────────────────────
            foreach ($activeMembers as $member) {
                $order = Order::create([
                    'user_id' => $member->user_id,
                    'break_time_id' => $batch->break_time_id,
                    'status' => Order::STATUS_PREPARING,
                    'total_price' => $member->subtotal,
                    'note' => "[Batch #{$batch->id} – {$batch->class_name}]"
                                        .($batch->note ? " {$batch->note}" : ''),
                    'ordered_at' => now(),
                ]);

                OrderItem::insert($member->items->map(fn ($i) => [
                    'order_id' => $order->id,
                    'menu_id' => $i->menu_id,
                    'menu_name' => $i->menu_name,
                    'menu_price' => $i->menu_price,
                    'quantity' => $i->quantity,
                    'subtotal' => $i->subtotal,
                    'created_at' => now(),
                    'updated_at' => now(),
                ])->toArray());

                $member->update(['order_id' => $order->id]);
            }

            // ── Deduct balance + record transactions ──────────────────────────
            if ($paymentMode === 'split') {

                foreach ($activeMembers as $member) {
                    $user = User::find($member->user_id);
                    $balanceBefore = (float) $user->balance;
                    $balanceAfter = $balanceBefore - (float) $member->subtotal;
                    $user->update(['balance' => $balanceAfter]);

                    BalanceTransaction::create([
                        'user_id' => $user->id,
                        'order_id' => $member->order_id,
                        'type' => BalanceTransaction::TYPE_DEBIT,
                        'amount' => $member->subtotal,
                        'balance_before' => $balanceBefore,
                        'balance_after' => $balanceAfter,
                        'description' => "Batch #{$batch->id} ({$batch->class_name}) — Split Bill",
                    ]);

                    $member->update(['payment_status' => 'paid']);
                }

            } else {

                // Creator pays the full total in one deduction
                $creator = User::find($creatorId);
                $runningBefore = (float) $creator->balance;

                foreach ($activeMembers as $member) {
                    $runningAfter = $runningBefore - (float) $member->subtotal;

                    BalanceTransaction::create([
                        'user_id' => $creator->id,
                        'order_id' => $member->order_id,
                        'type' => BalanceTransaction::TYPE_DEBIT,
                        'amount' => $member->subtotal,
                        'balance_before' => $runningBefore,
                        'balance_after' => $runningAfter,
                        'description' => "Batch #{$batch->id} ({$batch->class_name}) — dibayar untuk {$member->user->name}",
                    ]);

                    $runningBefore = $runningAfter;
                    $member->update(['payment_status' => 'waived']);
                }

                $creator->update(['balance' => $runningBefore]);

                // Mark creator's own member as 'paid' (they did the paying)
                $creatorMember = $activeMembers->firstWhere('user_id', $creatorId);
                $creatorMember?->update(['payment_status' => 'paid']);
            }

            $batch->update([
                'status' => Batch::STATUS_CHECKED_OUT,
                'payment_mode' => $paymentMode,
                'payer_user_id' => $paymentMode === 'one_pays' ? $creatorId : null,
            ]);
        });

        if ($error) {
            return back()->with('error', $error);
        }

        return redirect()->route('user.batches.show', $batch)
            ->with('success', 'Checkout berhasil! Semua pesanan anggota sedang disiapkan di dapur. 🍽️');
    }

    // ── Cancel batch ─────────────────────────────────────────────────────────

    /**
     * Cancel a batch.
     * - If open/locked: just cancel (no payments made yet).
     * - If checked_out: cancel all member orders + issue refunds.
     */
    public function cancel(Batch $batch): RedirectResponse
    {
        abort_unless($batch->created_by_user_id === auth()->id(), 403);
        abort_if($batch->isCancelled(), 400, 'Batch sudah dibatalkan.');

        $isCheckedOut = $batch->isCheckedOut();

        DB::transaction(function () use ($batch, $isCheckedOut) {
            $batch = Batch::lockForUpdate()->findOrFail($batch->id);

            if ($isCheckedOut) {
                // Load members with their orders
                $members = BatchMember::with(['items', 'order'])
                    ->where('batch_id', $batch->id)
                    ->lockForUpdate()
                    ->get();

                // Cancel each member's order and refund payment
                foreach ($members as $member) {
                    if (! $member->order_id) {
                        continue;
                    }

                    $order = Order::lockForUpdate()->find($member->order_id);
                    if (! $order || $order->status === Order::STATUS_CANCELLED) {
                        continue;
                    }

                    // Restore stock for this order
                    foreach ($member->items as $item) {
                        Menu::where('id', $item->menu_id)->increment('stock', $item->quantity);
                    }

                    // Cancel the order
                    $order->update(['status' => Order::STATUS_CANCELLED]);

                    // Issue refund
                    if ($batch->payment_mode === 'split' && $member->isPaid()) {
                        $user = User::lockForUpdate()->findOrFail($member->user_id);
                        $balanceBefore = (float) $user->balance;
                        $balanceAfter = $balanceBefore + (float) $member->subtotal;
                        $user->update(['balance' => $balanceAfter]);

                        BalanceTransaction::create([
                            'user_id' => $user->id,
                            'order_id' => $order->id,
                            'type' => BalanceTransaction::TYPE_REFUND,
                            'amount' => $member->subtotal,
                            'balance_before' => $balanceBefore,
                            'balance_after' => $balanceAfter,
                            'description' => "Refund — Batch #{$batch->id} ({$batch->class_name}) dibatalkan",
                        ]);
                    } elseif ($batch->payment_mode === 'one_pays') {
                        // Refund to payer
                        $payer = User::lockForUpdate()->findOrFail($batch->payer_user_id);
                        $balanceBefore = (float) $payer->balance;
                        $balanceAfter = $balanceBefore + (float) $member->subtotal;
                        $payer->update(['balance' => $balanceAfter]);

                        BalanceTransaction::create([
                            'user_id' => $payer->id,
                            'order_id' => $order->id,
                            'type' => BalanceTransaction::TYPE_REFUND,
                            'amount' => $member->subtotal,
                            'balance_before' => $balanceBefore,
                            'balance_after' => $balanceAfter,
                            'description' => "Refund — Batch #{$batch->id} ({$batch->class_name}) dibatalkan (untuk {$member->user->name})",
                        ]);
                    }

                    $member->update(['payment_status' => 'pending']);
                }
            }

            $batch->update(['status' => Batch::STATUS_CANCELLED]);
        });

        $msg = $isCheckedOut
            ? "Batch #{$batch->id} dibatalkan. Saldo telah dikembalikan ke masing-masing anggota."
            : "Batch #{$batch->id} dibatalkan.";

        return redirect()->route('user.batches.index')->with('success', $msg);
    }

    // ── Private helpers ───────────────────────────────────────────────────────

    private function doJoin(Batch $batch): RedirectResponse
    {
        $userId = auth()->id();

        $alreadyMember = BatchMember::where('batch_id', $batch->id)
            ->where('user_id', $userId)
            ->exists();

        if ($alreadyMember) {
            return redirect()->route('user.batches.show', $batch)
                ->with('info', 'Anda sudah bergabung dalam batch ini.');
        }

        BatchMember::create([
            'batch_id' => $batch->id,
            'user_id' => $userId,
            'subtotal' => 0,
            'payment_status' => 'pending',
        ]);

        return redirect()->route('user.batches.show', $batch)
            ->with('success', "Berhasil bergabung ke batch {$batch->class_name} (#{$batch->id}).");
    }
}
