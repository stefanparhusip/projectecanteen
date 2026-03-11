<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PointTransaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PointsController extends Controller
{
    /** Halaman utama poin — saldo, progress, history singkat */
    public function index(Request $request): View
    {
        $user = $request->user();
        $history = $user->pointTransactions()
            ->latest()
            ->paginate(15);

        // Poin yang dibutuhkan hingga reward berikutnya (setiap 100 poin)
        $current = $user->points_balance;
        $nextTier = (int) (ceil(($current + 1) / 100) * 100);
        $progressTo100 = $current % 100;          // 0-99
        $progressPct = ($progressTo100 / 100) * 100;
        $redeemable = (int) floor($current / 100); // berapa kali bisa redeem

        return view('user.points.index', compact(
            'user',
            'history',
            'nextTier',
            'progressTo100',
            'progressPct',
            'redeemable',
        ));
    }

    /** Tukar 100 poin → Rp 10.000 saldo */
    public function redeem(Request $request): RedirectResponse
    {
        $request->validate([
            'times' => 'required|integer|min:1|max:100',
        ]);

        $times = (int) $request->input('times');
        $costPts = $times * 100;
        $gainRp = $times * 10000;
        $errorMsg = null;

        DB::transaction(function () use ($request, $costPts, $gainRp, &$errorMsg) {
            // Re-fetch with lock to prevent race conditions
            $user = \App\Models\User::where('id', $request->user()->id)
                ->lockForUpdate()
                ->first();

            if ($user->points_balance < $costPts) {
                $errorMsg = 'Poin tidak mencukupi.';

                return;
            }

            $user->decrement('points_balance', $costPts);
            $user->increment('balance', $gainRp);

            PointTransaction::create([
                'user_id' => $user->id,
                'points' => -$costPts,
                'type' => PointTransaction::TYPE_REDEEM,
                'description' => "Penukaran {$costPts} poin → Rp ".number_format($gainRp, 0, ',', '.').' saldo',
            ]);
        });

        if ($errorMsg) {
            return back()->with('error', $errorMsg);
        }

        return back()->with('success',
            "Berhasil menukar {$costPts} poin menjadi Rp ".number_format($gainRp, 0, ',', '.').' saldo!'
        );
    }
}
