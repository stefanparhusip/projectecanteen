<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class SuspiciousActivityService
{
    /**
     * Number of suspicious events within the window before the account is locked.
     */
    const LOCK_THRESHOLD = 3;

    /**
     * Lock duration in minutes.
     */
    const LOCK_MINUTES = 30;

    /**
     * Sliding window for counting suspicious events (minutes).
     */
    const WINDOW_MINUTES = 10;

    // ── Public API ────────────────────────────────────────────────────────────

    /**
     * Record a suspicious event for a user and lock if threshold exceeded.
     *
     * @param  string  $event  e.g. 'brute_login', 'order_spam', 'topup_flood'
     */
    public static function record(int|User $user, string $event, string $ip = ''): void
    {
        $userId = $user instanceof User ? $user->id : $user;
        $key = self::counterKey($userId, $event);

        $count = (int) Cache::get($key, 0) + 1;
        Cache::put($key, $count, now()->addMinutes(self::WINDOW_MINUTES));

        Log::channel('single')->warning('suspicious_activity', [
            'user_id' => $userId,
            'event' => $event,
            'count' => $count,
            'ip' => $ip,
        ]);

        if ($count >= self::LOCK_THRESHOLD) {
            self::lockUser($userId, $event, $ip);
        }
    }

    /**
     * Lock a user account for LOCK_MINUTES.
     */
    public static function lockUser(int $userId, string $reason = '', string $ip = ''): void
    {
        Cache::put(self::lockKey($userId), true, now()->addMinutes(self::LOCK_MINUTES));

        Log::channel('single')->error('account_locked', [
            'user_id' => $userId,
            'reason' => $reason,
            'ip' => $ip,
            'until' => now()->addMinutes(self::LOCK_MINUTES)->toDateTimeString(),
        ]);
    }

    /**
     * Manually unlock a user (e.g. called by admin).
     */
    public static function unlockUser(int $userId): void
    {
        Cache::forget(self::lockKey($userId));
    }

    /**
     * Returns true if the user's account is currently locked.
     */
    public static function isLocked(int|User $user): bool
    {
        $userId = $user instanceof User ? $user->id : $user;

        return (bool) Cache::get(self::lockKey($userId), false);
    }

    /**
     * Seconds remaining on the account lock (0 if not locked).
     */
    public static function lockTtlSeconds(int $userId): int
    {
        return max(0, (int) Cache::getStore()->connection()->ttl(self::lockKey($userId)));
    }

    // ── Cache key helpers ─────────────────────────────────────────────────────

    public static function lockKey(int $userId): string
    {
        return "account_lock:{$userId}";
    }

    public static function counterKey(int $userId, string $event): string
    {
        return "suspicious:{$userId}:{$event}";
    }
}
