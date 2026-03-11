<?php

namespace Tests\Feature;

use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\RecurringOrder;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Feature tests for the Recurring Orders system.
 *
 * Coverage:
 *  CRUD / Access
 *   - User can view their recurring orders list
 *   - User can create a recurring order
 *   - Duplicate day+menu+breaktime for same user is rejected
 *   - User can toggle is_active
 *   - User can delete their recurring order
 *   - User cannot toggle/delete another user's recurring order
 *  Scheduler command
 *   - Command creates order on matching day_of_week
 *   - Command skips orders for wrong day
 *   - Command skips inactive recurring orders
 *   - Insufficient stock prevents order creation
 *   - Stock is decremented after successful run
 *   - Insufficient balance prevents order creation
 *   - last_run_at is updated after successful run
 *   - BalanceTransaction is created after successful run
 */
class RecurringOrderTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function student(float $balance = 500_000): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => $balance]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Break Test',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '23:59:00',
        ]);
    }

    private function menu(int $stock = 10, float $price = 15_000): Menu
    {
        $cat = Category::firstOrCreate(['name' => 'Makanan'], ['description' => '']);

        return Menu::create([
            'category_id' => $cat->id,
            'name' => 'Nasi Goreng Test',
            'price' => $price,
            'stock' => $stock,
        ]);
    }

    /** Today's day_of_week integer (0=Sun … 6=Sat) */
    private function todayDow(): int
    {
        return (int) now()->format('w');
    }

    /** A day_of_week that is NOT today */
    private function otherDow(): int
    {
        return ($this->todayDow() + 1) % 7;
    }

    // ── Controller / Access ──────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_view_recurring_orders_index(): void
    {
        $user = $this->student();
        $this->actingAs($user)->get('/recurring')->assertOk();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_create_recurring_order(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        $this->actingAs($user)
            ->post('/recurring', [
                'menu_id' => $menu->id,
                'qty' => 1,
                'day_of_week' => 1,
                'break_time_id' => $bt->id,
            ])->assertRedirect('/recurring');

        $this->assertDatabaseHas('recurring_orders', [
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function duplicate_schedule_is_rejected(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->actingAs($user)
            ->post('/recurring', [
                'menu_id' => $menu->id,
                'qty' => 2,
                'day_of_week' => 1,
                'break_time_id' => $bt->id,
            ])->assertRedirect();

        $this->assertCount(1, RecurringOrder::all());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_toggle_recurring_order(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        $ro = RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->actingAs($user)
            ->patch("/recurring/{$ro->id}/toggle")
            ->assertRedirect();

        $this->assertFalse((bool) $ro->fresh()->is_active);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_delete_recurring_order(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        $ro = RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
        ]);

        $this->actingAs($user)
            ->delete("/recurring/{$ro->id}")
            ->assertRedirect();

        $this->assertDatabaseMissing('recurring_orders', ['id' => $ro->id]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_cannot_toggle_another_users_recurring_order(): void
    {
        $owner = $this->student();
        $other = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        $ro = RecurringOrder::create([
            'user_id' => $owner->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
        ]);

        $this->actingAs($other)
            ->patch("/recurring/{$ro->id}/toggle")
            ->assertForbidden();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_cannot_delete_another_users_recurring_order(): void
    {
        $owner = $this->student();
        $other = $this->student();
        $bt = $this->breakTime();
        $menu = $this->menu();

        $ro = RecurringOrder::create([
            'user_id' => $owner->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => 1,
            'break_time_id' => $bt->id,
        ]);

        $this->actingAs($other)
            ->delete("/recurring/{$ro->id}")
            ->assertForbidden();
    }

    // ── Scheduler Command ────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function command_creates_order_on_matching_day(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu(10, 15_000);

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseHas('orders', [
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function command_skips_orders_for_wrong_day(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu();

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->otherDow(), // NOT today
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseCount('orders', 0);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function command_skips_inactive_recurring_orders(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu();

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => false, // inactive
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseCount('orders', 0);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function insufficient_stock_prevents_order_creation(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu(0, 15_000); // stock = 0

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseCount('orders', 0);
        $this->assertEquals(500_000, (float) $user->fresh()->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function stock_is_decremented_after_successful_run(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu(10, 15_000);

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 3,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertEquals(7, $menu->fresh()->stock);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function insufficient_balance_prevents_order_creation(): void
    {
        $user = $this->student(5_000); // only Rp 5k
        $bt = $this->breakTime();
        $menu = $this->menu(10, 15_000); // costs Rp 15k

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseCount('orders', 0);
        $this->assertEquals(5_000, (float) $user->fresh()->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function last_run_at_is_updated_after_successful_run(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu();

        $ro = RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->assertNull($ro->last_run_at);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertNotNull($ro->fresh()->last_run_at);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function balance_transaction_is_created_after_successful_run(): void
    {
        $user = $this->student(500_000);
        $bt = $this->breakTime();
        $menu = $this->menu(10, 15_000);

        RecurringOrder::create([
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'qty' => 1,
            'day_of_week' => $this->todayDow(),
            'break_time_id' => $bt->id,
            'is_active' => true,
        ]);

        $this->artisan('orders:recurring')->assertSuccessful();

        $this->assertDatabaseHas('balance_transactions', [
            'user_id' => $user->id,
            'type' => BalanceTransaction::TYPE_DEBIT,
            'amount' => '15000.00',
            'balance_before' => '500000.00',
            'balance_after' => '485000.00',
        ]);
    }
}
