<?php

namespace Tests\Feature;

use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Idempotency & offline-recovery tests.
 *
 * Coverage:
 *  - Duplicate POST with same idempotency_key returns existing order (no duplicate created)
 *  - Duplicate POST deducts balance only once
 *  - Two different idempotency keys → two separate orders
 *  - Omitted idempotency key → normal order created (backwards-compatible)
 *  - JSON response path: wantsJson → returns JSON with order_id & redirect_url
 *  - Stale duplicate key from a different user is not reused (isolation)
 *  - idempotency_key stored on the order row
 */
class IdempotencyOrderTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function student(float $balance = 100000): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => $balance]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Istirahat 1',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '23:59:00', // always open in tests
        ]);
    }

    private function menu(float $price = 10000, int $stock = 50): Menu
    {
        $cat = Category::create(['name' => 'Makanan']);

        return Menu::create([
            'category_id' => $cat->id,
            'name' => 'Nasi Goreng',
            'price' => $price,
            'stock' => $stock,
            'is_available' => true,
        ]);
    }

    /** Build the POST payload for placing an order */
    private function orderPayload(BreakTime $bt, Menu $menu, ?string $idempotencyKey = null): array
    {
        $payload = [
            'break_time_id' => $bt->id,
            'items' => [['menu_id' => $menu->id, 'quantity' => 1]],
        ];
        if ($idempotencyKey !== null) {
            $payload['idempotency_key'] = $idempotencyKey;
        }

        return $payload;
    }

    // ── Tests ─────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function same_idempotency_key_returns_existing_order_without_duplicate(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);
        $key = 'test-idem-key-001';

        // First POST — creates the order
        $this->travelTo(now()->setHour(9)->setMinute(0));

        $this->actingAs($user)
            ->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key))
            ->assertRedirect();

        $this->assertDatabaseCount('orders', 1);
        $firstOrderId = Order::first()->id;

        // Second POST with same key — must return the SAME order, no new row
        $this->actingAs($user)
            ->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key))
            ->assertRedirect();

        $this->assertDatabaseCount('orders', 1);
        $this->assertEquals($firstOrderId, Order::first()->id, 'No second order should be created');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function duplicate_idempotency_key_deducts_balance_only_once(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);
        $key = 'test-idem-key-002';

        $this->travelTo(now()->setHour(9)->setMinute(0));

        $this->actingAs($user)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));
        $this->actingAs($user)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));

        $user->refresh();
        $this->assertEquals(40000, (float) $user->balance, 'Balance should only be deducted once');
        $this->assertDatabaseCount('balance_transactions', 1);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function different_idempotency_keys_create_separate_orders(): void
    {
        $user = $this->student(100000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000, 99);

        $this->travelTo(now()->setHour(9)->setMinute(0));

        $this->actingAs($user)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, 'key-A'));
        $this->actingAs($user)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, 'key-B'));

        $this->assertDatabaseCount('orders', 2);
        $user->refresh();
        $this->assertEquals(80000, (float) $user->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_without_idempotency_key_works_normally(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);

        $this->travelTo(now()->setHour(9)->setMinute(0));

        $this->actingAs($user)
            ->post(route('user.orders.store'), $this->orderPayload($bt, $menu, null))
            ->assertRedirect();

        $this->assertDatabaseCount('orders', 1);
        $this->assertNull(Order::first()->idempotency_key);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function idempotency_key_is_stored_on_order_row(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);
        $key = 'store-key-123';

        $this->travelTo(now()->setHour(9)->setMinute(0));

        $this->actingAs($user)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));

        $this->assertDatabaseHas('orders', ['idempotency_key' => $key]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function json_response_path_returns_order_id_and_redirect_url(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);

        $this->travelTo(now()->setHour(9)->setMinute(0));

        $response = $this->actingAs($user)
            ->postJson(route('user.orders.store'), $this->orderPayload($bt, $menu, 'json-key-001'));

        $response->assertStatus(200)
            ->assertJsonStructure(['status', 'order_id', 'redirect_url', 'message'])
            ->assertJsonPath('status', 'ok')
            ->assertJsonPath('duplicate', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function json_duplicate_returns_existing_order_id(): void
    {
        $user = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000);
        $key = 'json-dup-key';

        $this->travelTo(now()->setHour(9)->setMinute(0));

        // First request
        $first = $this->actingAs($user)
            ->postJson(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));
        $orderId = $first->json('order_id');

        // Duplicate
        $second = $this->actingAs($user)
            ->postJson(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));

        $second->assertStatus(200)
            ->assertJsonPath('status', 'ok')
            ->assertJsonPath('duplicate', true)
            ->assertJsonPath('order_id', $orderId);

        $this->assertDatabaseCount('orders', 1);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function idempotency_key_isolated_between_users(): void
    {
        $userA = $this->student(50000);
        $userB = $this->student(50000);
        $bt = $this->breakTime();
        $menu = $this->menu(10000, 99);
        $key = 'shared-key';

        $this->travelTo(now()->setHour(9)->setMinute(0));

        // userA places order with key
        $this->actingAs($userA)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));

        // userB uses same key — must be treated as a NEW order (different user)
        $this->actingAs($userB)->post(route('user.orders.store'), $this->orderPayload($bt, $menu, $key));

        $this->assertDatabaseCount('orders', 2);
        $this->assertEquals(2, Order::count(), 'Each user\'s idempotency key must be scoped to that user');
    }
}
