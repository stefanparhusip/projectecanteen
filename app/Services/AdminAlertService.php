<?php

namespace App\Services;

use App\Models\BalanceTransaction;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

/**
 * Detects unusual activity spikes and writes structured alert logs.
 * Runs lightweight counts against the DB; results are cached for 1 minute
 * to avoid hammering the DB on every request.
 */
class AdminAlertService
{
    /**
     * Orders placed in the last window that triggers an alert.
     */
    const ORDER_SPIKE_THRESHOLD = 50;

    /**
     * Top-up requests pending approval that triggers an alert.
     */
    const TOPUP_PENDING_THRESHOLD = 20;

    /**
     * How many minutes constitute the "recent" window for order spikes.
     */
    const SPIKE_WINDOW_MINUTES = 5;

    /**
     * Cache TTL (seconds) for alert checks — avoids repeated DB hits.
     */
    const CACHE_TTL_SECONDS = 60;

    // ── Spike Checks ──────────────────────────────────────────────────────────

    /**
     * Check if order volume in the last SPIKE_WINDOW_MINUTES minutes is unusually high.
     * Returns true if an alert was raised.
     */
    public static function checkOrderSpike(): bool
    {
        $count = Cache::remember('alert:order_spike', self::CACHE_TTL_SECONDS, function () {
            return Order::where('ordered_at', '>=', now()->subMinutes(self::SPIKE_WINDOW_MINUTES))
                ->count();
        });

        if ($count >= self::ORDER_SPIKE_THRESHOLD) {
            self::alert('order_spike', [
                'orders_last_'.self::SPIKE_WINDOW_MINUTES.'_min' => $count,
                'threshold' => self::ORDER_SPIKE_THRESHOLD,
            ]);

            return true;
        }

        return false;
    }

    /**
     * Check if pending top-up queue is unusually long.
     */
    public static function checkTopupSpike(): bool
    {
        $count = Cache::remember('alert:topup_spike', self::CACHE_TTL_SECONDS, function () {
            return BalanceTransaction::where('type', BalanceTransaction::TYPE_TOPUP)
                ->where('description', 'pending')
                ->count();
        });

        if ($count >= self::TOPUP_PENDING_THRESHOLD) {
            self::alert('topup_spike', [
                'pending_topups' => $count,
                'threshold' => self::TOPUP_PENDING_THRESHOLD,
            ]);

            return true;
        }

        return false;
    }

    /**
     * Run all spike checks. Called after order creation and top-up events.
     */
    public static function runAll(): void
    {
        self::checkOrderSpike();
        self::checkTopupSpike();
    }

    // ── Alert writer ──────────────────────────────────────────────────────────

    public static function alert(string $type, array $context = []): void
    {
        Log::channel('single')->alert("admin_alert:{$type}", array_merge([
            'type' => $type,
            'at' => now()->toDateTimeString(),
        ], $context));
    }
}
