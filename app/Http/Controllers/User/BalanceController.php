<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Services\AdminAlertService;
use App\Services\SuspiciousActivityService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BalanceController extends Controller
{
    /**
     * Halaman saldo: tampilkan saldo saat ini dan riwayat mutasi.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $transactions = BalanceTransaction::where('user_id', $user->id)
            ->latest()
            ->paginate(15);

        return view('user.balance.index', compact('user', 'transactions'));
    }

    /**
     * User mengajukan permintaan top-up.
     * Admin yang akan menyetujuinya (manual / transfer bank).
     */
    public function requestTopup(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:5000|max:1000000',
        ]);

        $user = $request->user();

        // Detect excessive topup requests from this user
        SuspiciousActivityService::record($user, 'topup_flood', $request->ip());

        // Catat sebagai pending top-up (belum mengubah saldo)
        BalanceTransaction::create([
            'user_id' => $user->id,
            'order_id' => null,
            'type' => BalanceTransaction::TYPE_TOPUP,
            'amount' => $data['amount'],
            'balance_before' => $user->balance,
            'balance_after' => $user->balance, // akan diupdate saat disetujui admin
            'description' => 'pending',
        ]);

        // Alert admin if pending queue is unusually large
        AdminAlertService::checkTopupSpike();

        return back()->with('success', 'Permintaan top-up sebesar Rp '.number_format($data['amount'], 0, ',', '.').' telah dikirim. Menunggu persetujuan admin.');
    }
}
