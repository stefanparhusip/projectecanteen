<?php

namespace App\Services;

use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Promotion evaluation engine.
 *
 * Cart items are plain arrays (or array-accessible objects) with keys:
 *   menu_id  (int)
 *   price    (float)   — unit price in Rupiah
 *   quantity (int)
 *
 * Stacking rules
 * ──────────────
 *   • Stackable promos combine freely with each other.
 *   • Non-stackable promos: only the one that yields the highest discount
 *     applies (priority acts as a tiebreak when discounts are equal).
 *   • The final discount = all stackable discounts
 *                        + best non-stackable discount (if any).
 *   • Total discount is capped at the raw cart total (cannot go negative).
 */
class PromoEngine
{
    /**
     * Evaluate all active, in-range promotions for a cart.
     *
     * @param  Collection  $cartItems  Items with keys: menu_id, price, quantity
     * @param  Carbon|null  $now  Defaults to now() (Asia/Jakarta)
     */
    public function evaluate(Collection $cartItems, ?Carbon $now = null): PromoResult
    {
        $now = $now ?? now();

        $rawTotal = $cartItems->sum(
            fn ($i) => (float) data_get($i, 'price') * (int) data_get($i, 'quantity')
        );

        if ($rawTotal <= 0 || $cartItems->isEmpty()) {
            return new PromoResult(0.0, collect(), $rawTotal);
        }

        $active = Promotion::active()
            ->inRange($now)
            ->orderByDesc('priority')
            ->orderByDesc('id')
            ->get();

        $applicable = $active->filter(
            fn ($p) => $this->isApplicable($p, $cartItems, $now)
        );

        if ($applicable->isEmpty()) {
            return new PromoResult(0.0, collect(), $rawTotal);
        }

        $stackable = $applicable->where('stackable', true)->values();
        $nonStackable = $applicable->where('stackable', false)->values();

        // Sum all stackable discounts
        $stackDiscount = (float) $stackable->sum(
            fn ($p) => $this->calcDiscount($p, $rawTotal, $cartItems)
        );

        // Pick single best non-stackable
        $bestNS = null;
        $bestNSDiscount = 0.0;
        foreach ($nonStackable as $p) {
            $d = $this->calcDiscount($p, $rawTotal, $cartItems);
            if ($d > $bestNSDiscount) {
                $bestNSDiscount = $d;
                $bestNS = $p;
            }
        }

        $totalDiscount = min($stackDiscount + $bestNSDiscount, $rawTotal);

        $applied = $stackable;
        if ($bestNS !== null) {
            $applied = $applied->push($bestNS);
        }

        return new PromoResult($totalDiscount, $applied->values(), $rawTotal);
    }

    // ── Applicability checks ──────────────────────────────────────────────────

    private function isApplicable(Promotion $promo, Collection $cartItems, Carbon $now): bool
    {
        $params = (array) ($promo->params ?? []);

        return match ($promo->type) {
            Promotion::TYPE_BUNDLE => $this->checkBundle($params, $cartItems),
            Promotion::TYPE_TIME => $this->checkTime($params, $now),
            default => false,
        };
    }

    /**
     * Bundle: fires when the total qualifying-item quantity >= min_items.
     *
     * params.menu_ids — empty/absent = any menu qualifies;
     *                   non-empty    = only those menu IDs count.
     * params.min_items — minimum total quantity, default 2.
     */
    private function checkBundle(array $params, Collection $cartItems): bool
    {
        $minItems = max(1, (int) ($params['min_items'] ?? 2));
        $menuIds = array_filter(array_map('intval', (array) ($params['menu_ids'] ?? [])));

        if (empty($menuIds)) {
            $qty = $cartItems->sum(fn ($i) => (int) data_get($i, 'quantity'));
        } else {
            $qty = $cartItems
                ->filter(fn ($i) => in_array((int) data_get($i, 'menu_id'), $menuIds, true))
                ->sum(fn ($i) => (int) data_get($i, 'quantity'));
        }

        return $qty >= $minItems;
    }

    /**
     * Time / Happy Hour: fires when $now falls within the configured window.
     *
     * params.days       — array of weekday ints (0=Sun…6=Sat), default all days.
     * params.start_time — "HH:MM", default "00:00".
     * params.end_time   — "HH:MM", default "23:59".
     */
    private function checkTime(array $params, Carbon $now): bool
    {
        $days = isset($params['days']) ? array_map('intval', (array) $params['days']) : range(0, 6);
        $startTime = $params['start_time'] ?? '00:00';
        $endTime = $params['end_time'] ?? '23:59';

        if (! in_array($now->dayOfWeek, $days, true)) {
            return false;
        }

        // Build Carbon instances for start/end on the same day as $now
        [$startH, $startM] = array_map('intval', explode(':', $startTime));
        [$endH,   $endM] = array_map('intval', explode(':', $endTime));

        $start = $now->copy()->setTime($startH, $startM, 0);
        $end = $now->copy()->setTime($endH, $endM, 59);

        return $now->between($start, $end);
    }

    // ── Discount calculation ──────────────────────────────────────────────────

    /**
     * Public single-promo discount calculator — used for per-promo audit trail.
     */
    public function calculateSingleDiscount(Promotion $promo, float $rawTotal, Collection $cartItems): float
    {
        return $this->calcDiscount($promo, $rawTotal, $cartItems);
    }

    private function calcDiscount(Promotion $promo, float $rawTotal, Collection $cartItems): float
    {
        if ($promo->discount_type === Promotion::DISCOUNT_PERCENTAGE) {
            return $rawTotal * ((float) $promo->discount_value / 100.0);
        }

        // Fixed Rp discount — capped at rawTotal
        return min((float) $promo->discount_value, $rawTotal);
    }
}
