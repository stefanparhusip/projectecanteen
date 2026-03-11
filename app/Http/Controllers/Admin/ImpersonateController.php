<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImpersonationLog;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Manages admin impersonation of regular users for troubleshooting.
 *
 * Session keys used:
 *  - impersonating_log_id  : ImpersonationLog PK for closing on stop
 *  - impersonated_by       : admin's User ID (set by start, cleared by stop)
 *
 * Only super-admins (role=admin && is_super_admin=true) may access these routes.
 */
class ImpersonateController extends Controller
{
    /** Impersonation audit log (super-admin only). */
    public function audit(Request $request): View
    {
        $logs = ImpersonationLog::with(['impersonator', 'target'])
            ->latest('started_at')
            ->paginate(30);

        return view('admin.impersonation.audit', compact('logs'));
    }

    /**
     * Begin impersonating the given user.
     *
     * Guards:
     *  - Cannot impersonate self
     *  - Cannot impersonate another admin / super-admin
     *  - Cannot start a second impersonation while one is already active
     */
    public function start(Request $request, User $user): RedirectResponse
    {
        $admin = $request->user();

        // Guard: self
        if ($admin->id === $user->id) {
            return back()->with('error', 'Tidak dapat mengimpersonasi diri sendiri.');
        }

        // Guard: cannot impersonate admins
        if ($user->isAdmin()) {
            return back()->with('error', 'Tidak dapat mengimpersonasi sesama admin.');
        }

        // Guard: already impersonating
        if (session()->has('impersonated_by')) {
            return back()->with('error', 'Anda sudah dalam mode impersonasi. Hentikan sesi saat ini terlebih dahulu.');
        }

        // Create audit log
        $log = ImpersonationLog::create([
            'impersonator_id' => $admin->id,
            'target_user_id' => $user->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'started_at' => now(),
        ]);

        // Store admin context in session BEFORE switching auth
        session([
            'impersonated_by' => $admin->id,
            'impersonating_log_id' => $log->id,
        ]);

        // Switch authentication to the target user
        Auth::login($user);

        return redirect()->route('user.menus.index')
            ->with('info', "Anda sedang mengimpersonasi {$user->name}. Klik 'Hentikan Impersonasi' untuk kembali.");
    }

    /**
     * Revert back to the original admin session.
     */
    public function stop(Request $request): RedirectResponse
    {
        $adminId = session('impersonated_by');

        if (! $adminId) {
            return redirect()->route('admin.dashboard');
        }

        // Close the audit log
        $logId = session('impersonating_log_id');
        if ($logId) {
            ImpersonationLog::where('id', $logId)
                ->whereNull('ended_at')
                ->update(['ended_at' => now()]);
        }

        // Clear impersonation session keys
        session()->forget(['impersonated_by', 'impersonating_log_id']);

        // Restore admin authentication
        Auth::loginUsingId($adminId);

        return redirect()->route('admin.users.index')
            ->with('success', 'Sesi impersonasi dihentikan. Anda kembali sebagai admin.');
    }
}
