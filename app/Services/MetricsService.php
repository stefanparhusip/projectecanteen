<?php

namespace App\Services;

use App\Models\Backup;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Collects application metrics and renders them in Prometheus text format.
 *
 * This is a skeleton exporter — add more metric families as needed.
 * Prometheus text format spec: https://prometheus.io/docs/instrumenting/exposition_formats/
 */
class MetricsService
{
    /**
     * Render all metric families as a Prometheus-compatible text string.
     */
    public function render(): string
    {
        $lines = [];

        $this->addQueueMetrics($lines);
        $this->addOrderMetrics($lines);
        $this->addUserMetrics($lines);
        $this->addBackupMetrics($lines);
        $this->addCronMetrics($lines);
        $this->addDatabaseMetrics($lines);

        return implode("\n", $lines)."\n";
    }

    // ── Metric Families ──────────────────────────────────────────────────────

    private function addQueueMetrics(array &$lines): void
    {
        $driver = config('queue.default');
        $pending = 0;

        try {
            if ($driver === 'database') {
                $pending = (int) DB::table('jobs')->count();
            }
            $failed = (int) DB::table('failed_jobs')->count();
        } catch (\Throwable) {
            $failed = 0;
        }

        $lines[] = '# HELP app_queue_pending_total Number of pending jobs in the queue';
        $lines[] = '# TYPE app_queue_pending_total gauge';
        $lines[] = "app_queue_pending_total{queue=\"default\",driver=\"{$driver}\"} {$pending}";

        $lines[] = '# HELP app_queue_failed_total Number of failed jobs';
        $lines[] = '# TYPE app_queue_failed_total gauge';
        $lines[] = "app_queue_failed_total {$failed}";
        $lines[] = '';
    }

    private function addOrderMetrics(array &$lines): void
    {
        $lines[] = '# HELP app_orders_total Total orders grouped by status';
        $lines[] = '# TYPE app_orders_total gauge';

        try {
            $counts = Order::query()
                ->selectRaw('status, count(*) as total')
                ->groupBy('status')
                ->pluck('total', 'status');

            foreach ($counts as $status => $total) {
                $lines[] = "app_orders_total{status=\"{$status}\"} {$total}";
            }

            $todayCount = Order::whereDate('created_at', today())->count();
            $lines[] = "app_orders_today_total {$todayCount}";
        } catch (\Throwable) {
            $lines[] = '# ERROR collecting order metrics';
        }

        $lines[] = '';
    }

    private function addUserMetrics(array &$lines): void
    {
        $lines[] = '# HELP app_users_total Total users grouped by role';
        $lines[] = '# TYPE app_users_total gauge';

        try {
            $counts = User::query()
                ->selectRaw('role, count(*) as total')
                ->groupBy('role')
                ->pluck('total', 'role');

            foreach ($counts as $role => $total) {
                $lines[] = "app_users_total{role=\"{$role}\"} {$total}";
            }
        } catch (\Throwable) {
            $lines[] = '# ERROR collecting user metrics';
        }

        $lines[] = '';
    }

    private function addBackupMetrics(array &$lines): void
    {
        $lines[] = '# HELP app_backups_total Total database backups grouped by status';
        $lines[] = '# TYPE app_backups_total gauge';

        try {
            $counts = Backup::query()
                ->selectRaw('status, count(*) as total')
                ->groupBy('status')
                ->pluck('total', 'status');

            foreach ($counts as $status => $total) {
                $lines[] = "app_backups_total{status=\"{$status}\"} {$total}";
            }

            $latest = Backup::where('status', 'completed')->latest()->value('created_at');
            if ($latest) {
                $lines[] = "app_backup_last_completed_timestamp_seconds {$latest->timestamp}";
            }
        } catch (\Throwable) {
            $lines[] = '# ERROR collecting backup metrics';
        }

        $lines[] = '';
    }

    private function addCronMetrics(array &$lines): void
    {
        $lines[] = '# HELP app_cron_last_run_timestamp_seconds Unix timestamp of last successful cron run';
        $lines[] = '# TYPE app_cron_last_run_timestamp_seconds gauge';
        $lines[] = '# HELP app_cron_up 1 if cron ran within expected window, 0 if late or unknown';
        $lines[] = '# TYPE app_cron_up gauge';

        foreach (HealthCheckService::TRACKED_CRON_JOBS as $job => $meta) {
            $ping = Cache::get(HealthCheckService::CRON_CACHE_PREFIX.$job);
            $label = str_replace([' ', ':'], ['_', '_'], $job);
            $ts = $ping ?? 0;
            $late = $ping === null || (now()->timestamp - $ping) > ($meta['max_lag_hours'] * 3600);
            $up = $late ? 0 : 1;

            $lines[] = "app_cron_last_run_timestamp_seconds{job=\"{$job}\"} {$ts}";
            $lines[] = "app_cron_up{job=\"{$job}\"} {$up}";
        }

        $lines[] = '';
    }

    private function addDatabaseMetrics(array &$lines): void
    {
        $lines[] = '# HELP app_db_response_time_milliseconds Time to execute a simple SELECT in ms';
        $lines[] = '# TYPE app_db_response_time_milliseconds gauge';

        try {
            $start = microtime(true);
            DB::selectOne('SELECT 1 as ping');
            $ms = round((microtime(true) - $start) * 1000, 2);
            $lines[] = "app_db_response_time_milliseconds {$ms}";
        } catch (\Throwable) {
            $lines[] = 'app_db_response_time_milliseconds -1';
        }

        $lines[] = '';
    }
}
