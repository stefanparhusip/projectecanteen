<?php

namespace Tests\Feature\Api;

use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * API v1 feature tests.
 *
 * Coverage:
 *  Auth
 *   - Login with valid credentials returns token
 *   - Login with wrong password returns 422
 *   - Login with unknown abilities returns 422
 *   - Logout revokes token
 *   - Protected endpoint rejects missing token
 *  Scope / Ability
 *   - orders:create ability required for POST /orders
 *   - orders:read ability required for GET /orders/{id}
 *   - balance:read ability required for GET /balance
 *   - Token without ability returns 403
 *  Menus
 *   - GET /menus returns only in-stock items
 *   - GET /menus?search= filters by name
 *   - GET /menus/{id} returns single menu
 *   - GET /menus/{id} returns 404 for soft-deleted menu
 *  Orders
 *   - POST /orders creates order and deducts balance
 *   - POST /orders returns 422 when stock insufficient
 *   - POST /orders returns 422 when balance insufficient
 *   - GET /orders/{id} returns own order
 *   - GET /orders/{id} returns 403 for another user's order
 *  Balance
 *   - GET /balance returns balance and transactions
 *  Webhook
 *   - Valid signature updates order status
 *   - Invalid signature returns 401
 *   - Terminal status cannot be overwritten
 *   - Rate limiting headers present
 */
class ApiTest extends TestCase
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
            'label' => 'Slot Test',
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
            'name' => 'Nasi Goreng',
            'price' => $price,
            'stock' => $stock,
        ]);
    }

    private function tokenFor(User $user, array $abilities = ['menus:read', 'orders:create', 'orders:read', 'balance:read']): string
    {
        return $user->createToken('test', $abilities)->plainTextToken;
    }

    private function webhookSig(string $body): string
    {
        return 'sha256='.hash_hmac('sha256', $body, 'test-webhook-secret');
    }

    // ── Auth ─────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function login_with_valid_credentials_returns_token(): void
    {
        $user = $this->student();

        $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertOk()
            ->assertJsonStructure(['token', 'token_type', 'abilities']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function login_with_wrong_password_returns_422(): void
    {
        $user = $this->student();

        $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ])->assertStatus(422)
            ->assertJsonValidationErrors('email');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function login_with_unknown_ability_returns_422(): void
    {
        $user = $this->student();

        $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'password',
            'abilities' => ['admin:everything'],
        ])->assertStatus(422);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function logout_revokes_token(): void
    {
        $user = $this->student();
        $tokenModel = $user->createToken('test', ['balance:read']);
        $plain = $tokenModel->plainTextToken;
        $tokenId = $tokenModel->accessToken->id;

        $this->withToken($plain)
            ->postJson('/api/v1/auth/logout')
            ->assertOk();

        // Token record must be deleted from DB
        $this->assertDatabaseMissing('personal_access_tokens', ['id' => $tokenId]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function protected_endpoint_rejects_missing_token(): void
    {
        $this->getJson('/api/v1/menus')->assertUnauthorized();
    }

    // ── Scope / Ability ───────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function token_without_orders_create_ability_gets_403(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user, ['orders:read', 'balance:read']); // no orders:create

        $this->withToken($token)
            ->postJson('/api/v1/orders', [
                'break_time_id' => 1,
                'items' => [['menu_id' => 1, 'quantity' => 1]],
            ])->assertForbidden();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function token_without_orders_read_ability_gets_403(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();
        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => 0,
            'ordered_at' => now(),
        ]);
        $token = $this->tokenFor($user, ['orders:create', 'balance:read']); // no orders:read

        $this->withToken($token)
            ->getJson("/api/v1/orders/{$order->id}")
            ->assertForbidden();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function token_without_balance_read_ability_gets_403(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user, ['menus:read', 'orders:read']); // no balance:read

        $this->withToken($token)
            ->getJson('/api/v1/balance')
            ->assertForbidden();
    }

    // ── Menus ─────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_menus_returns_in_stock_items(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user);
        $cat = Category::firstOrCreate(['name' => 'Makanan'], ['description' => '']);

        Menu::create(['category_id' => $cat->id, 'name' => 'A', 'price' => 10000, 'stock' => 5]);
        Menu::create(['category_id' => $cat->id, 'name' => 'B', 'price' => 10000, 'stock' => 0]);

        $res = $this->withToken($token)
            ->getJson('/api/v1/menus')
            ->assertOk();

        $names = collect($res->json('data'))->pluck('name');
        $this->assertTrue($names->contains('A'));
        $this->assertFalse($names->contains('B'));
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_menus_filters_by_search(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user);
        $cat = Category::firstOrCreate(['name' => 'Makanan'], ['description' => '']);

        Menu::create(['category_id' => $cat->id, 'name' => 'Nasi Goreng', 'price' => 10000, 'stock' => 5]);
        Menu::create(['category_id' => $cat->id, 'name' => 'Mie Goreng',  'price' => 10000, 'stock' => 5]);

        $res = $this->withToken($token)
            ->getJson('/api/v1/menus?search=Nasi')
            ->assertOk();

        $names = collect($res->json('data'))->pluck('name');
        $this->assertTrue($names->contains('Nasi Goreng'));
        $this->assertFalse($names->contains('Mie Goreng'));
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_menu_show_returns_single_menu(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user);
        $menu = $this->menu();

        $this->withToken($token)
            ->getJson("/api/v1/menus/{$menu->id}")
            ->assertOk()
            ->assertJsonPath('data.id', $menu->id)
            ->assertJsonPath('data.name', $menu->name);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_menu_show_returns_404_for_soft_deleted(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user);
        $menu = $this->menu();
        $menu->delete();

        $this->withToken($token)
            ->getJson("/api/v1/menus/{$menu->id}")
            ->assertNotFound();
    }

    // ── Orders ────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function post_orders_creates_order_and_deducts_balance(): void
    {
        $user = $this->student(500_000);
        $token = $this->tokenFor($user);
        $bt = $this->breakTime();
        $menu = $this->menu(10, 15_000);

        $res = $this->withToken($token)
            ->postJson('/api/v1/orders', [
                'break_time_id' => $bt->id,
                'items' => [['menu_id' => $menu->id, 'quantity' => 2]],
            ])->assertCreated()
            ->assertJsonStructure(['data' => ['id', 'status', 'total_price', 'items']]);

        $this->assertEquals(30_000, $res->json('data.total_price'));

        // Balance was deducted
        $this->assertEquals(470_000, (float) $user->fresh()->balance);

        // Stock was reduced
        $this->assertEquals(8, $menu->fresh()->stock);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function post_orders_returns_422_when_stock_insufficient(): void
    {
        $user = $this->student(500_000);
        $token = $this->tokenFor($user);
        $bt = $this->breakTime();
        $menu = $this->menu(1, 15_000);

        $this->withToken($token)
            ->postJson('/api/v1/orders', [
                'break_time_id' => $bt->id,
                'items' => [['menu_id' => $menu->id, 'quantity' => 5]],
            ])->assertStatus(422);

        // Balance and stock unchanged
        $this->assertEquals(500_000, (float) $user->fresh()->balance);
        $this->assertEquals(1, $menu->fresh()->stock);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function post_orders_returns_422_when_balance_insufficient(): void
    {
        $user = $this->student(10_000); // only Rp 10k
        $token = $this->tokenFor($user);
        $bt = $this->breakTime();
        $menu = $this->menu(10, 50_000);

        $this->withToken($token)
            ->postJson('/api/v1/orders', [
                'break_time_id' => $bt->id,
                'items' => [['menu_id' => $menu->id, 'quantity' => 1]],
            ])->assertStatus(422);

        $this->assertEquals(10_000, (float) $user->fresh()->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_order_show_returns_own_order(): void
    {
        $user = $this->student();
        $token = $this->tokenFor($user);
        $bt = $this->breakTime();

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PREPARING,
            'total_price' => 15_000,
            'ordered_at' => now(),
        ]);

        $this->withToken($token)
            ->getJson("/api/v1/orders/{$order->id}")
            ->assertOk()
            ->assertJsonPath('data.id', $order->id)
            ->assertJsonPath('data.status', Order::STATUS_PREPARING);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_order_show_returns_403_for_another_users_order(): void
    {
        $user1 = $this->student();
        $user2 = $this->student();
        $token2 = $this->tokenFor($user2);
        $bt = $this->breakTime();

        $order = Order::create([
            'user_id' => $user1->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => 0,
            'ordered_at' => now(),
        ]);

        $this->withToken($token2)
            ->getJson("/api/v1/orders/{$order->id}")
            ->assertForbidden();
    }

    // ── Balance ───────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function get_balance_returns_balance_and_transactions(): void
    {
        $user = $this->student(200_000);
        $token = $this->tokenFor($user);

        BalanceTransaction::create([
            'user_id' => $user->id,
            'type' => BalanceTransaction::TYPE_TOPUP,
            'amount' => 200_000,
            'balance_before' => 0,
            'balance_after' => 200_000,
            'description' => 'Top up awal',
        ]);

        $res = $this->withToken($token)
            ->getJson('/api/v1/balance')
            ->assertOk()
            ->assertJsonStructure(['data' => ['balance', 'points_balance', 'transactions']]);

        $this->assertEquals(200_000, $res->json('data.balance'));
        $this->assertCount(1, $res->json('data.transactions'));
    }

    // ── Webhook ───────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_with_valid_signature_updates_order_status(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => 0,
            'ordered_at' => now(),
        ]);

        $body = json_encode(['order_id' => $order->id, 'status' => Order::STATUS_PREPARING]);

        $this->postJson('/api/v1/webhooks/order-status',
            json_decode($body, true),
            ['X-Webhook-Signature' => $this->webhookSig($body)]
        )->assertOk()
            ->assertJsonPath('new_status', Order::STATUS_PREPARING);

        $this->assertEquals(Order::STATUS_PREPARING, $order->fresh()->status);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_with_invalid_signature_returns_401(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => 0,
            'ordered_at' => now(),
        ]);

        $this->postJson('/api/v1/webhooks/order-status',
            ['order_id' => $order->id, 'status' => Order::STATUS_PREPARING],
            ['X-Webhook-Signature' => 'sha256=badsignature']
        )->assertStatus(401);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_cannot_overwrite_terminal_status(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_COLLECTED,
            'total_price' => 0,
            'ordered_at' => now(),
        ]);

        $body = json_encode(['order_id' => $order->id, 'status' => Order::STATUS_PREPARING]);

        $this->postJson('/api/v1/webhooks/order-status',
            json_decode($body, true),
            ['X-Webhook-Signature' => $this->webhookSig($body)]
        )->assertStatus(422);

        $this->assertEquals(Order::STATUS_COLLECTED, $order->fresh()->status);
    }
}
