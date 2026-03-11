<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\User;
use App\Services\SuspiciousActivityService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Daftar semua user (kecuali admin) beserta saldo.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $users = User::query()
            ->where('role', '!=', 'admin')
            ->when($search, fn ($q) => $q->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            }))
            ->withCount('orders')
            ->orderBy('name')
            ->paginate(20)
            ->withQueryString();

        // Pending topup count untuk badge notifikasi
        $pendingTopup = BalanceTransaction::where('type', BalanceTransaction::TYPE_TOPUP)
            ->where('description', 'pending')
            ->count();

        return view('admin.users.index', compact('users', 'search', 'pendingTopup'));
    }

    /**
     * Admin melakukan top-up langsung ke saldo user (tanpa approval).
     */
    public function topupDirect(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:1000|max:5000000',
            'description' => 'nullable|string|max:100',
        ]);

        if ($user->isAdmin()) {
            return back()->with('error', 'Tidak dapat mengisi saldo akun admin.');
        }

        DB::transaction(function () use ($user, $data) {
            $balanceBefore = $user->balance;
            $balanceAfter = $balanceBefore + $data['amount'];

            $user->update(['balance' => $balanceAfter]);

            BalanceTransaction::create([
                'user_id' => $user->id,
                'order_id' => null,
                'type' => BalanceTransaction::TYPE_TOPUP,
                'amount' => $data['amount'],
                'balance_before' => $balanceBefore,
                'balance_after' => $balanceAfter,
                'description' => $data['description'] ?? 'Top-up by admin',
            ]);
        });

        return back()->with('success',
            "Saldo {$user->name} berhasil ditambahkan Rp ".
            number_format($data['amount'], 0, ',', '.').'.'
        );
    }

    /**
     * Admin menyesuaikan saldo user (set ulang saldo ke nilai tertentu).
     */
    public function adjustBalance(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'balance' => 'required|numeric|min:0|max:99999999',
            'description' => 'nullable|string|max:100',
        ]);

        if ($user->isAdmin()) {
            return back()->with('error', 'Tidak dapat mengubah saldo akun admin.');
        }

        DB::transaction(function () use ($user, $data) {
            $balanceBefore = $user->balance;
            $balanceAfter = $data['balance'];
            $diff = $balanceAfter - $balanceBefore;

            $user->update(['balance' => $balanceAfter]);

            if ($diff != 0) {
                BalanceTransaction::create([
                    'user_id' => $user->id,
                    'order_id' => null,
                    'type' => $diff > 0 ? BalanceTransaction::TYPE_TOPUP : BalanceTransaction::TYPE_DEBIT,
                    'amount' => abs($diff),
                    'balance_before' => $balanceBefore,
                    'balance_after' => $balanceAfter,
                    'description' => $data['description'] ?? 'Penyesuaian saldo oleh admin',
                ]);
            }
        });

        return back()->with('success', "Saldo {$user->name} berhasil disesuaikan.");
    }

    // ── Soft Delete / Trash / Restore / Force Delete ─────────────────────────

    /**
     * Soft-delete user (pindah ke Trash).
     * Admin tidak boleh menghapus dirinya sendiri.
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        if ($user->isAdmin()) {
            return back()->with('error', 'Akun admin tidak dapat dihapus.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', "User \"{$user->name}\" dipindahkan ke Trash.");
    }

    /** Tampilkan semua user yang di-soft-delete */
    public function trash(): View
    {
        $users = User::onlyTrashed()
            ->withCount('orders')
            ->latest('deleted_at')
            ->paginate(20);

        return view('admin.trash.users', compact('users'));
    }

    /** Pulihkan user dari Trash */
    public function restore(int $id): RedirectResponse
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('admin.trash.users')
            ->with('success', "User \"{$user->name}\" berhasil dipulihkan.");
    }

    /**
     * Hapus user secara permanen.
     * PERHATIAN: order_items & balance_transactions akan tetap ada (order_id nullable
     * melalui nullOnDelete/cascade), tapi orders akan ikut terhapus (cascadeOnDelete).
     */
    public function forceDelete(int $id): RedirectResponse
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $name = $user->name;

        // Soft-delete dulu semua pesanan user agar tidak conflict FK
        // (orders.user_id → cascadeOnDelete hanya berlaku untuk hard delete di DB level)
        $user->orders()->withTrashed()->forceDelete();
        $user->forceDelete();

        return redirect()->route('admin.trash.users')
            ->with('success', "User \"{$name}\" dihapus permanen beserta seluruh pesanannya.");
    }

    /**
     * Unlock a user account that was soft-locked by SuspiciousActivityService.
     */
    public function unlock(User $user): RedirectResponse
    {
        SuspiciousActivityService::unlockUser($user->id);

        return back()->with('success', "Akun \"{$user->name}\" berhasil dibuka kuncinya.");
    }
}
