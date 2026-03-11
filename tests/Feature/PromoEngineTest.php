<?php

namespace Tests\Feature;

use App\Models\Promotion;
use App\Services\PromoEngine;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

/**
 * PromoEngine unit-style tests running against in-memory SQLite.
 *
 * Coverage:
 *  - Bundle promo: fires when min_items met, not before
 *  - Time promo (happy hour): fires only within window / correct day
 *  - Percentage vs fixed discount calculation accuracy
 *  - Stacking: stackable promos accumulate; non-stackable → best wins
 *  - Priority tiebreak for non-stackable
 *  - Discount capped at rawTotal (cannot go negative)
 *  - Expired / inactive promos ignored
 *  - Multiple overlapping promos: correct winner selected
 */
class PromoEngineTest extends TestCase
{
    use RefreshDatabase;

    private PromoEngine $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $this->engine = new PromoEngine;
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function cart(array $items): Collection
    {
        return collect($items);
    }

    private function makePromo(array $attrs): Promotion
    {
        return Promotion::create(array_merge([
            'name' => 'Test Promo',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 2, 'menu_ids' => []],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
            'priority' => 0,
            'stackable' => false,
            'start_at' => null,
            'end_at' => null,
            'active' => true,
        ], $attrs));
    }

    // ── Bundle tests ──────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function bundle_fires_when_min_items_met(): void
    {
        $this->makePromo([
            'name' => 'Bundle 2+',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 2, 'menu_ids' => []],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
        ]);

        $cart = $this->cart([
            ['menu_id' => 1, 'price' => 10000, 'quantity' => 1],
            ['menu_id' => 2, 'price' => 10000, 'quantity' => 1],
        ]);

        $result = $this->engine->evaluate($cart);

        $this->assertTrue($result->hasDiscount());
        $this->assertEquals(2000.0, $result->discountAmount); // 10% of 20000
        $this->assertEquals(18000.0, $result->finalTotal());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function bundle_does_not_fire_below_min_items(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 3, 'menu_ids' => []],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
        ]);

        $cart = $this->cart([
            ['menu_id' => 1, 'price' => 10000, 'quantity' => 1],
            ['menu_id' => 2, 'price' => 10000, 'quantity' => 1],
        ]);

        $result = $this->engine->evaluate($cart);

        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function bundle_fires_for_specific_menu_ids_only(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 2, 'menu_ids' => [99, 100]],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
        ]);

        // Cart has 2 items but none match menu_ids [99,100]
        $cart = $this->cart([
            ['menu_id' => 1, 'price' => 10000, 'quantity' => 1],
            ['menu_id' => 2, 'price' => 10000, 'quantity' => 1],
        ]);

        $result = $this->engine->evaluate($cart);

        $this->assertFalse($result->hasDiscount(), 'Should not fire for non-matching menu IDs');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function bundle_fires_for_specific_menu_ids_when_matching(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 2, 'menu_ids' => [1, 2]],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 15,
        ]);

        $cart = $this->cart([
            ['menu_id' => 1, 'price' => 10000, 'quantity' => 1],
            ['menu_id' => 2, 'price' => 10000, 'quantity' => 1],
            ['menu_id' => 5, 'price' => 5000,  'quantity' => 1], // not in bundle
        ]);

        // Promo fires (2 matching items), discount 15% of entire rawTotal=25000
        $result = $this->engine->evaluate($cart);

        $this->assertTrue($result->hasDiscount());
        $this->assertEquals(3750.0, $result->discountAmount); // 15% of 25000
    }

    // ── Time / Happy Hour tests ───────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function time_promo_fires_within_window(): void
    {
        // Monday = 1 in Carbon (0=Sun)
        $this->makePromo([
            'type' => Promotion::TYPE_TIME,
            'params' => ['days' => [1], 'start_time' => '07:00', 'end_time' => '10:00'],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 20,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        // Monday 08:30
        $monday = Carbon::create(2026, 3, 9, 8, 30, 0, 'Asia/Jakarta'); // March 9 2026 = Monday

        $result = $this->engine->evaluate($cart, $monday);

        $this->assertTrue($result->hasDiscount());
        $this->assertEquals(2000.0, $result->discountAmount); // 20% of 10000
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function time_promo_does_not_fire_outside_window(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_TIME,
            'params' => ['days' => [1], 'start_time' => '07:00', 'end_time' => '10:00'],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 20,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        // Monday 11:00 — after window
        $outside = Carbon::create(2026, 3, 9, 11, 0, 0, 'Asia/Jakarta');

        $result = $this->engine->evaluate($cart, $outside);

        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function time_promo_does_not_fire_on_wrong_day(): void
    {
        // Only Monday
        $this->makePromo([
            'type' => Promotion::TYPE_TIME,
            'params' => ['days' => [1], 'start_time' => '07:00', 'end_time' => '10:00'],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 20,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        // Tuesday 08:00
        $tuesday = Carbon::create(2026, 3, 10, 8, 0, 0, 'Asia/Jakarta');

        $result = $this->engine->evaluate($cart, $tuesday);

        $this->assertFalse($result->hasDiscount());
    }

    // ── Discount type accuracy ────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function percentage_discount_is_calculated_correctly(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 25,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 12000, 'quantity' => 2]]);
        $result = $this->engine->evaluate($cart);

        $this->assertEquals(6000.0, $result->discountAmount); // 25% of 24000
        $this->assertEquals(18000.0, $result->finalTotal());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function fixed_discount_is_applied_correctly(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_FIXED,
            'discount_value' => 5000,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 15000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertEquals(5000.0, $result->discountAmount);
        $this->assertEquals(10000.0, $result->finalTotal());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function fixed_discount_is_capped_at_total(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_FIXED,
            'discount_value' => 99999, // larger than cart total
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 5000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        // Discount capped at 5000 (rawTotal), finalTotal = 0
        $this->assertEquals(5000.0, $result->discountAmount);
        $this->assertEquals(0.0, $result->finalTotal());
    }

    // ── Stacking rules ────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function stackable_promos_combine(): void
    {
        // Two stackable promos: 10% + 5% → 15% total
        $this->makePromo([
            'name' => 'Stack A',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
            'stackable' => true,
        ]);
        $this->makePromo([
            'name' => 'Stack B',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 5,
            'stackable' => true,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 20000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertEquals(3000.0, $result->discountAmount); // 15% of 20000
        $this->assertCount(2, $result->appliedPromos);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function non_stackable_best_wins(): void
    {
        // Two non-stackable: 10% vs 20% → 20% wins
        $this->makePromo([
            'name' => 'NS A 10%',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
            'stackable' => false,
            'priority' => 5,
        ]);
        $this->makePromo([
            'name' => 'NS B 20%',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 20,
            'stackable' => false,
            'priority' => 0,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertEquals(2000.0, $result->discountAmount); // 20% wins
        $this->assertCount(1, $result->appliedPromos);
        $this->assertEquals('NS B 20%', $result->appliedPromos->first()->name);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function stackable_and_non_stackable_combine_correctly(): void
    {
        // Stackable 5% + non-stackable best (15%) → total 20%
        $this->makePromo([
            'name' => 'Stack 5%',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 5,
            'stackable' => true,
        ]);
        $this->makePromo([
            'name' => 'NS 15%',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 15,
            'stackable' => false,
        ]);
        $this->makePromo([
            'name' => 'NS 10%',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
            'stackable' => false,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        // 5% (stackable) + 15% best non-stackable = 20% = 2000
        $this->assertEquals(2000.0, $result->discountAmount);
        $this->assertCount(2, $result->appliedPromos);
    }

    // ── Edge cases ────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function inactive_promo_is_ignored(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 50,
            'active' => false,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function expired_promo_is_ignored(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 50,
            'start_at' => now()->subDays(30),
            'end_at' => now()->subDay(),   // ended yesterday
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function future_promo_is_ignored(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 50,
            'start_at' => now()->addDay(), // starts tomorrow
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 10000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function empty_cart_returns_zero_discount(): void
    {
        $this->makePromo([
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
        ]);

        $result = $this->engine->evaluate(collect([]));

        $this->assertEquals(0.0, $result->discountAmount);
        $this->assertFalse($result->hasDiscount());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function promo_result_summary_is_human_readable(): void
    {
        $this->makePromo([
            'name' => 'Hemat Lebaran',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 1],
            'discount_type' => Promotion::DISCOUNT_FIXED,
            'discount_value' => 5000,
        ]);

        $cart = $this->cart([['menu_id' => 1, 'price' => 20000, 'quantity' => 1]]);
        $result = $this->engine->evaluate($cart);

        $this->assertStringContainsString('Hemat Lebaran', $result->summary());
        $this->assertStringContainsString('5.000', $result->summary());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function multiple_bundle_promos_overlap_correctly(): void
    {
        // Promo A: min 2 items, 10% — fires
        // Promo B: min 5 items, 20% — does NOT fire (only 3 items in cart)
        $this->makePromo([
            'name' => 'Bundle 2',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 2],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 10,
            'stackable' => false,
        ]);
        $this->makePromo([
            'name' => 'Bundle 5',
            'type' => Promotion::TYPE_BUNDLE,
            'params' => ['min_items' => 5],
            'discount_type' => Promotion::DISCOUNT_PERCENTAGE,
            'discount_value' => 20,
            'stackable' => false,
        ]);

        $cart = $this->cart([
            ['menu_id' => 1, 'price' => 10000, 'quantity' => 2],
            ['menu_id' => 2, 'price' => 10000, 'quantity' => 1],
        ]);

        $result = $this->engine->evaluate($cart);

        $this->assertTrue($result->hasDiscount());
        $this->assertEquals(3000.0, $result->discountAmount); // 10% of 30000
        $this->assertEquals('Bundle 2', $result->appliedPromos->first()->name);
    }
}
