<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TransactionController extends Controller
{
    // ── Daftar transaksi dengan filter ────────────────────────────────────────

    public function index(Request $request): View
    {
        $query = BalanceTransaction::with(['user', 'order'])
            ->latest();

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $transactions = $query->paginate(30)->withQueryString();

        // Summary totals for the filtered set (all pages)
        $summaryQuery = BalanceTransaction::query();
        if ($request->filled('type')) {
            $summaryQuery->where('type', $request->type);
        }
        if ($request->filled('user_id')) {
            $summaryQuery->where('user_id', $request->user_id);
        }
        if ($request->filled('date_from')) {
            $summaryQuery->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $summaryQuery->whereDate('created_at', '<=', $request->date_to);
        }

        $summary = $summaryQuery->selectRaw(
            "SUM(CASE WHEN type = 'topup'  THEN amount ELSE 0 END) as total_topup,
             SUM(CASE WHEN type = 'debit'  THEN amount ELSE 0 END) as total_debit,
             SUM(CASE WHEN type = 'refund' THEN amount ELSE 0 END) as total_refund,
             COUNT(*) as total_count"
        )->first();

        $users = User::orderBy('name')->get(['id', 'name']);

        return view('admin.transactions.index', compact(
            'transactions', 'summary', 'users'
        ));
    }

    // ── CSV Export ────────────────────────────────────────────────────────────

    public function export(Request $request): Response
    {
        $query = BalanceTransaction::with(['user', 'order'])->latest();

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $rows = $query->get();

        $filename = 'transactions_'.now()->format('Ymd_His').'.csv';

        $buf = fopen('php://temp', 'r+');
        fwrite($buf, "\xEF\xBB\xBF"); // BOM for Excel UTF-8 detection
        fputcsv($buf, ['ID', 'User', 'Tipe', 'Order ID', 'Jumlah (Rp)',
            'Saldo Sebelum', 'Saldo Sesudah', 'Keterangan', 'Tanggal']);

        foreach ($rows as $tx) {
            fputcsv($buf, [
                $tx->id,
                $tx->user?->name ?? '-',
                strtoupper($tx->type),
                $tx->order_id ?? '-',
                number_format((float) $tx->amount, 2, '.', ''),
                number_format((float) $tx->balance_before, 2, '.', ''),
                number_format((float) $tx->balance_after, 2, '.', ''),
                $tx->description ?? '',
                $tx->created_at->format('Y-m-d H:i:s'),
            ]);
        }

        rewind($buf);
        $content = stream_get_contents($buf);
        fclose($buf);

        return response($content, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    // ── Bulk Refund ───────────────────────────────────────────────────────────

    /**
     * Tampilkan daftar pesanan yang bisa di-refund secara massal.
     * Eligible: pesanan berstatus pending/preparing (belum ready/cancelled/collected).
     */
    public function bulkRefundIndex(Request $request): View
    {
        $orders = Order::with(['user', 'breakTime'])
            ->whereIn('status', [Order::STATUS_PENDING, Order::STATUS_PREPARING])
            ->latest('ordered_at')
            ->paginate(30);

        return view('admin.transactions.bulk-refund', compact('orders'));
    }

    /**
     * Proses bulk refund: cancel semua order yang dipilih dan kembalikan saldo.
     *
     * Setiap order diproses dalam sub-transaction indivisible.
     * Jika satu order gagal (misalnya sudah di-cancel), yang lain tetap diproses.
     */
    public function bulkRefundProcess(Request $request): RedirectResponse
    {
        $request->validate([
            'order_ids' => 'required|array|min:1',
            'order_ids.*' => 'integer|exists:orders,id',
            'reason' => 'nullable|string|max:255',
        ]);

        $reason = $request->input('reason', 'Bulk refund oleh admin');
        $processed = 0;
        $skipped = 0;

        foreach ($request->order_ids as $orderId) {
            try {
                DB::transaction(function () use ($orderId, $reason, &$processed) {
                    $order = Order::lockForUpdate()->findOrFail($orderId);

                    // Hanya proses jika masih bisa di-refund
                    if (! in_array($order->status, [Order::STATUS_PENDING, Order::STATUS_PREPARING])) {
                        return; // skip, tidak menghitung sebagai processed
                    }

                    $user = $order->user()->lockForUpdate()->first();
                    $balanceBefore = (float) $user->balance;
                    $balanceAfter = $balanceBefore + (float) $order->total_price;

                    $user->update(['balance' => $balanceAfter]);

                    BalanceTransaction::create([
                        'user_id' => $user->id,
                        'order_id' => $order->id,
                        'type' => BalanceTransaction::TYPE_REFUND,
                        'amount' => $order->total_price,
                        'balance_before' => $balanceBefore,
                        'balance_after' => $balanceAfter,
                        'description' => "Bulk refund — {$reason} (Pesanan #{$order->id})",
                    ]);

                    $order->update(['status' => Order::STATUS_CANCELLED]);

                    $processed++;
                });
            } catch (\Throwable) {
                $skipped++;
            }
        }

        $msg = "Bulk refund selesai: {$processed} pesanan diproses.";
        if ($skipped > 0) {
            $msg .= " {$skipped} pesanan dilewati (sudah diproses atau error).";
        }

        return redirect()->route('admin.transactions.index')->with('success', $msg);
    }
}
