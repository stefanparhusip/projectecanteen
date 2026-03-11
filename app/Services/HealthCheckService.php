<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Runs a set of lightweight health checks and returns structured results.
 *
 * Each check returns an array with at minimum a 'status' key:
 *   'ok'             — healthy
 *   'degraded'       — working but with warnings
 *   'error'          — failed
 *   'unknown'        — no data yet (e.g. cron has never run)
 */
class HealthCheckService
{
    /**
     * Ordered list of scheduled jobs to track, with their expected run intervals.
     *
     * 'max_lag_hours' is how long we wait before marking the job as 'late'.
     */
    public const TRACKED_CRON_JOBS = [
        'menu:reset-stock' => ['label' => 'Reset Stok',         'max_lag_hours' => 25],
        'reports:reconcile' => ['label' => 'Rekonsiliasi',        'max_lag_hours' => 25],
        'anomalies:detect' => ['label' => 'Deteksi Anomali',     'max_lag_hours' => 2],
        'stock:check-alerts' => ['label' => 'Alert Stok',          'max_lag_hours' => 1],
        'orders:recurring' => ['label' => 'Recurring Order',     'max_lag_hours' => 25],
        'backup:run' => ['label' => 'Backup Harian',       'max_lag_hours' => 25],
        'backup:cleanup' => ['label' => 'Cleanup Backup',      'max_lag_hours' => 25],
    ];

    /** Cache key template for cron health pings */
    public const CRON_CACHE_PREFIX = 'health:cron:';

    /** Run all checks and return a keyed array. */
    public function all(): array
    {
        return [
            'database' => $this->checkDatabase(),
            'cache' => $this->checkCache(),
            'storage' => $this->checkStorage(),
            'queue' => $this->checkQueue(),
            'cron' => $this->checkCron(),
            'sentry' => $this->checkSentry(),
        ];
    }

    // ── Individual Checks ────────────────────────────────────────────────────

    public function checkDatabase(): array
    {
        try {
            $start = microtime(true);
            DB::selectOne('SELECT 1 as ping');
            $ms = round((microtime(true) - $start) * 1000, 2);

            return ['status' => 'ok', 'response_ms' => $ms];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function checkCache(): array
    {
        $key = 'health:ping:'.uniqid('', true);
        try {
            Cache::put($key, 'ping', 10);
            $ok = Cache::get($key) === 'ping';
            Cache::forget($key);

            return ['status' => $ok ? 'ok' : 'degraded'];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function checkStorage(): array
    {
        $path = storage_path('app/health_probe.tmp');
        try {
            file_put_contents($path, '1');
            $readable = file_get_contents($path) === '1';
            @unlink($path);

            return ['status' => $readable ? 'ok' : 'degraded'];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function checkQueue(): array
    {
        try {
            $driver = config('queue.default');
            $pending = 0;

            if ($driver === 'database') {
                $pending = (int) DB::table('jobs')->count();
            }

            $failed = (int) DB::table('failed_jobs')->count();

            return [
                'status' => $failed > 0 ? 'degraded' : 'ok',
                'driver' => $driver,
                'pending' => $pending,
                'failed' => $failed,
            ];
        } catch (\Throwable $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function checkCron(): array
    {
        $results = [];

        foreach (self::TRACKED_CRON_JOBS as $job => $meta) {
            $ping = Cache::get(self::CRON_CACHE_PREFIX.$job);

            if ($ping === null) {
                $results[$job] = ['status' => 'unknown', 'label' => $meta['label'], 'last_run' => null];

                continue;
            }

            $ageSeconds = now()->timestamp - $ping;
            $late = $ageSeconds > ($meta['max_lag_hours'] * 3600);

            $results[$job] = [
                'status' => $late ? 'late' : 'ok',
                'label' => $meta['label'],
                'last_run' => $ping,
                'age_min' => (int) round($ageSeconds / 60),
            ];
        }

        return $results;
    }

    public function checkSentry(): array
    {
        $dsn = config('sentry.dsn');

        return [
            'status' => $dsn ? 'configured' : 'not_configured',
            'dsn_set' => ! empty($dsn),
        ];
    }

    /** Record that a cron job ran successfully right now. */
    public static function pingCron(string $jobKey): void
    {
        Cache::put(self::CRON_CACHE_PREFIX.$jobKey, now()->timestamp, 86400 * 3);
    }
}
