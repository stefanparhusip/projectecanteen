<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TopupController extends Controller
{
    /**
     * Daftar permintaan top-up yang menunggu persetujuan.
     * Ditandai dengan type='topup' dan balance_after = balance_before (belum diproses).
     * Untuk menyederhanakan, kita menggunakan flag description='pending'.
     */
    public function index(): View
    {
        $requests = BalanceTransaction::with('user')
            ->where('type', BalanceTransaction::TYPE_TOPUP)
            ->where('description', 'pending')
            ->latest()
            ->paginate(20);

        return view('admin.topup.index', compact('requests'));
    }

    /**
     * Setujui top-up: tambah saldo user dan catat transaksi final.
     */
    public function approve(BalanceTransaction $balanceTransaction): RedirectResponse
    {
        if ($balanceTransaction->description !== 'pending') {
            return back()->with('error', 'Permintaan ini sudah diproses.');
        }

        DB::transaction(function () use ($balanceTransaction) {
            $user = $balanceTransaction->user;

            $balanceBefore = $user->balance;
            $balanceAfter = $balanceBefore + $balanceTransaction->amount;

            // Update saldo user
            $user->update(['balance' => $balanceAfter]);

            // Update catatan transaksi
            $balanceTransaction->update([
                'balance_before' => $balanceBefore,
                'balance_after' => $balanceAfter,
                'description' => 'approved',
            ]);
        });

        $balanceTransaction->refresh();
        event(new \App\Events\TopupApproved($balanceTransaction->user, $balanceTransaction));

        return back()->with('success', 'Top-up berhasil disetujui.');
    }

    /**
     * Tolak permintaan top-up.
     */
    public function reject(BalanceTransaction $balanceTransaction): RedirectResponse
    {
        if ($balanceTransaction->description !== 'pending') {
            return back()->with('error', 'Permintaan ini sudah diproses.');
        }

        $balanceTransaction->update(['description' => 'rejected']);

        return back()->with('success', 'Permintaan top-up ditolak.');
    }
}
