<?php

namespace App\Services;

use App\Models\FeatureFlag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

/**
 * Determines whether a feature flag is active for a given user/request.
 *
 * Evaluation order:
 *  1. Flag must exist and is_enabled = true  (global kill-switch)
 *  2. User-specific override (is_enabled = true/false)
 *  3. Rollout bucket  — deterministic hash(flagKey + userId/cookieUUID) % 100
 *
 * Variant assignment (A/B):
 *  Uses a separate hash seed so variant split is independent of rollout bucket.
 *  Bucket 0-49 → variant A,  50-99 → variant B.
 *  User overrides can pin a specific variant.
 *
 * The cookie `_ab_uid` (UUID v4) tracks anonymous/guest users across requests.
 * It is written to the response by the AssignAbCookie middleware.
 */
class FeatureFlagService
{
    /** Cookie name used for anonymous visitor tracking. */
    public const AB_COOKIE = '_ab_uid';

    /** Cache TTL for flag lookups (seconds). */
    private const CACHE_TTL = 60;

    // ── Public API ────────────────────────────────────────────────────────────

    /**
     * Check whether this flag is enabled for the given user/request.
     */
    public function isEnabled(string $key, ?User $user = null, ?Request $request = null): bool
    {
        $flag = $this->getFlag($key);

        if (! $flag || ! $flag->is_enabled) {
            return false;
        }

        // User-specific override
        if ($user) {
            $override = $flag->overrides()->where('user_id', $user->id)->first();
            if ($override && $override->is_enabled !== null) {
                return $override->is_enabled;
            }
        }

        // Rollout bucket check
        $identity = $this->resolveIdentity($user, $request);
        $bucket = $this->bucket($key, $identity);

        return $bucket < $flag->rollout_percentage;
    }

    /**
     * Return the assigned A/B variant ('A' or 'B') for this flag, or null if
     * the flag has no variants or is not enabled for this user.
     */
    public function getVariant(string $key, ?User $user = null, ?Request $request = null): ?string
    {
        $flag = $this->getFlag($key);

        if (! $flag || ! $flag->has_ab_variants) {
            return null;
        }

        if (! $this->isEnabled($key, $user, $request)) {
            return null;
        }

        // User-specific variant override
        if ($user) {
            $override = $flag->overrides()->where('user_id', $user->id)->first();
            if ($override && $override->variant !== null) {
                return $override->variant;
            }
        }

        $identity = $this->resolveIdentity($user, $request);
        $vBucket = $this->bucket('variant:'.$key, $identity);

        return $vBucket < 50 ? 'A' : 'B';
    }

    // ── Internal ──────────────────────────────────────────────────────────────

    private function getFlag(string $key): ?FeatureFlag
    {
        return Cache::remember(
            "feature_flag:{$key}",
            self::CACHE_TTL,
            fn () => FeatureFlag::where('key', $key)->first()
        );
    }

    /**
     * Returns a stable 0–99 bucket for the given flag+identity combination.
     * Uses crc32 for speed; the goal is uniform distribution, not cryptographic strength.
     */
    public function bucket(string $seed, string $identity): int
    {
        return abs(crc32($seed.':'.$identity)) % 100;
    }

    /**
     * Resolve a stable string identity for bucket assignment.
     * Authenticated users → user ID string.
     * Guests → cookie UUID.
     */
    public function resolveIdentity(?User $user, ?Request $request): string
    {
        if ($user) {
            return (string) $user->id;
        }

        if ($request) {
            return $request->cookie(self::AB_COOKIE) ?? 'guest';
        }

        return 'guest';
    }

    /**
     * Flush cached flag entry (call after admin updates a flag).
     */
    public function flushCache(string $key): void
    {
        Cache::forget("feature_flag:{$key}");
    }
}
