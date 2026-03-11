<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\Order;
use App\Models\User;
use App\Services\HealthCheckService;
use App\Services\SentryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HealthController extends Controller
{
    public function __construct(
        private HealthCheckService $health,
        private SentryService $sentry,
    ) {}

    public function index(): View
    {
        $checks = $this->health->all();

        // Quick business snapshot
        $stats = [
            'orders_today' => Order::whereDate('created_at', today())->count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'total_users' => User::count(),
            'backups_completed' => Backup::where('status', 'completed')->count(),
            'failed_jobs' => (int) \Illuminate\Support\Facades\DB::table('failed_jobs')->count(),
        ];

        $sentryEnabled = $this->sentry->isEnabled();
        $appVersion = trim((string) shell_exec('git rev-parse --short HEAD 2>/dev/null')) ?: 'unknown';

        return view('admin.health.index', compact('checks', 'stats', 'sentryEnabled', 'appVersion'));
    }

    /**
     * Trigger a test exception and send it to Sentry.
     * Only super admins may call this to avoid accidental noise.
     */
    public function triggerTestException(): RedirectResponse
    {
        if (! auth()->user()->isSuperAdmin()) {
            abort(403, 'Hanya super admin yang dapat memicu test exception.');
        }

        $exception = new \RuntimeException(
            'Manual health-check test exception — triggered by '.auth()->user()->name
            .' at '.now()->toDateTimeString()
        );

        $eventId = $this->sentry->capture($exception);
        $this->sentry->captureMessage(
            'HealthPage: test exception triggered by '.auth()->user()->name,
            \Sentry\Severity::warning()
        );

        $msg = $eventId
            ? "Test exception dikirim ke Sentry (event: {$eventId})."
            : 'Test exception dijalankan, tapi Sentry tidak dikonfigurasi (SENTRY_DSN kosong).';

        return back()->with('info', $msg);
    }
}
