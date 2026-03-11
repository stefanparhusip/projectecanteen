<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class OrderController extends Controller
{
    /**
     * Tampilkan antrean pesanan (hanya status preparing, hari ini).
     */
    public function index(Request $request): View
    {
        $breakTimes = BreakTime::all();
        $breakTimeId = $request->input('break_time_id');

        $query = Order::with(['user', 'breakTime', 'items'])
            ->whereDate('ordered_at', today())
            ->whereIn('status', [Order::STATUS_PREPARING])
            ->orderBy('ordered_at');

        if ($breakTimeId) {
            $query->where('break_time_id', $breakTimeId);
        }

        $orders = $query->paginate(20)->withQueryString();

        return view('admin.orders.index', compact('orders', 'breakTimes', 'breakTimeId'));
    }

    public function show(Order $order): View
    {
        $order->load(['user', 'breakTime', 'items', 'orderQr']);

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Admin mengubah status pesanan.
     *
     * Aturan bisnis:
     *  - Jika diubah ke 'cancelled' → saldo user dikembalikan (refund) via DB::transaction.
     *  - Jika diubah ke 'ready'     → tidak ada perubahan saldo.
     *  - Idempotency: jika status sudah sama, tidak ada aksi.
     */
    public function updateStatus(Request $request, Order $order): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:ready,cancelled',
        ]);

        $newStatus = $request->status;

        // Guard: jangan proses jika status tidak berubah
        if ($order->status === $newStatus) {
            return back()->with('info', "Pesanan #{$order->id} sudah berstatus ini.");
        }

        DB::transaction(function () use ($order, $newStatus) {

            // ── PEMBATALAN → refund saldo ke user ─────────────────────────────
            if ($newStatus === Order::STATUS_CANCELLED) {
                $user = $order->user;   // withTrashed() sudah ada di relasi
                $balanceBefore = (float) $user->balance;
                $balanceAfter = $balanceBefore + (float) $order->total_price;

                // Kembalikan saldo
                $user->update(['balance' => $balanceAfter]);

                // Catat riwayat mutasi saldo (refund)
                BalanceTransaction::create([
                    'user_id' => $user->id,
                    'order_id' => $order->id,
                    'type' => BalanceTransaction::TYPE_REFUND,
                    'amount' => $order->total_price,
                    'balance_before' => $balanceBefore,
                    'balance_after' => $balanceAfter,
                    'description' => "Refund — Pesanan #{$order->id} dibatalkan admin",
                ]);
            }

            // ── SIAP DIAMBIL → generate QR token ────────────────────────────
            if ($newStatus === Order::STATUS_READY) {
                $order->generateQr();
            }

            // Update status pesanan
            $order->update(['status' => $newStatus]);
        });

        $label = match ($newStatus) {
            'ready' => 'Siap Diambil',
            'cancelled' => 'Dibatalkan (saldo dikembalikan ke user)',
            default => ucfirst($newStatus),
        };

        $message = "Pesanan #{$order->id} diubah menjadi: {$label}.";

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'status' => $newStatus,
                'label' => $label,
            ]);
        }

        return back()->with('success', $message);
    }

    /**
     * Soft delete pesanan (pindah ke Trash).
     * Hanya pesanan yang sudah selesai (ready/cancelled) yang boleh dihapus.
     */
    public function destroy(Order $order): RedirectResponse
    {
        if ($order->isPreparing()) {
            return back()->with('error', 'Pesanan yang sedang disiapkan tidak dapat dihapus.');
        }

        $order->delete();

        return back()->with('success', "Pesanan #{$order->id} dipindahkan ke Trash.");
    }

    // ── Trash / Restore / Force Delete ───────────────────────────────────────

    /** Tampilkan semua pesanan di Trash */
    public function trash(): View
    {
        $orders = Order::onlyTrashed()
            ->with(['user', 'breakTime'])
            ->latest('deleted_at')
            ->paginate(20);

        return view('admin.trash.orders', compact('orders'));
    }

    /** Pulihkan pesanan dari Trash */
    public function restore(int $id): RedirectResponse
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();

        return redirect()->route('admin.trash.orders')
            ->with('success', "Pesanan #{$order->id} berhasil dipulihkan.");
    }

    /** Unduh invoice PDF untuk satu pesanan. */
    public function invoicePdf(Order $order): SymfonyResponse
    {
        $order->load(['user', 'breakTime', 'items']);

        $pdf = Pdf::loadView('pdf.invoice', compact('order'));

        return $pdf->download("invoice-order-{$order->id}.pdf");
    }

    /** Hapus pesanan secara permanen beserta item dan transaksinya */
    public function forceDelete(int $id): RedirectResponse
    {
        $order = Order::onlyTrashed()->findOrFail($id);

        // Hapus relasi (order_items & balance_transactions cascade di DB,
        // tapi kita hapus eksplisit untuk konsistensi)
        $order->items()->delete();
        $order->balanceTransaction?->delete();
        $order->forceDelete();

        return redirect()->route('admin.trash.orders')
            ->with('success', "Pesanan #{$order->id} dihapus permanen.");
    }
}
