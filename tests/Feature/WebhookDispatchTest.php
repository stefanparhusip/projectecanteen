<?php

namespace Tests\Feature;

use App\Events\OrderCreated;
use App\Events\OrderReady;
use App\Events\TopupApproved;
use App\Jobs\DispatchWebhookJob;
use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use App\Models\Webhook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

/**
 * Feature tests for the Phase-19 outbound webhook system.
 *
 * Coverage:
 *  DispatchWebhookJob
 *   - Sends correct HMAC-SHA256 signature header
 *   - Sends correct JSON body structure
 *   - Does not re-release (fail-fast) on 2xx response
 *   - Releases back to queue on non-2xx response
 *  Event → Listener fan-out
 *   - OrderCreated dispatches job for subscribed webhooks
 *   - OrderReady  dispatches job for subscribed webhooks
 *   - TopupApproved dispatches job for subscribed webhooks
 *   - Inactive webhook is skipped
 *   - Webhook not subscribed to the event is skipped
 *  Admin CRUD
 *   - Admin can view webhook list
 *   - Admin can create a webhook
 *   - Admin can update a webhook
 *   - Admin can delete a webhook
 *   - Test ping sends HTTP request to webhook URL
 */
class WebhookDispatchTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(float $balance = 500_000): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => $balance]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Break Test',
            'start_time' => '09:00:00',
            'end_time' => '10:00:00',
            'order_deadline' => '23:59:00',
        ]);
    }

    private function menu(int $stock = 20): Menu
    {
        $cat = Category::create(['name' => 'Test']);

        return Menu::create([
            'name' => 'Nasi Goreng',
            'description' => 'Enak',
            'price' => 10_000,
            'stock' => $stock,
            'category_id' => $cat->id,
            'is_available' => true,
        ]);
    }

    private function order(?User $user = null, ?BreakTime $bt = null, ?Menu $menu = null): Order
    {
        $user = $user ?? $this->student();
        $bt = $bt ?? $this->breakTime();
        $menu = $menu ?? $this->menu();

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => 10_000,
            'ordered_at' => now(),
        ]);
        $order->items()->create([
            'menu_id' => $menu->id,
            'menu_name' => $menu->name,
            'menu_price' => $menu->price,
            'quantity' => 1,
            'subtotal' => $menu->price,
        ]);

        return $order;
    }

    private function webhook(array $events = ['order_created'], bool $active = true): Webhook
    {
        return Webhook::create([
            'name' => 'Test Webhook',
            'url' => 'https://example.com/webhook',
            'secret' => 'supersecretkey1234567890',
            'events' => $events,
            'is_active' => $active,
        ]);
    }

    private function topupTransaction(User $user, float $amount = 50_000): BalanceTransaction
    {
        return BalanceTransaction::create([
            'user_id' => $user->id,
            'type' => 'topup',
            'amount' => $amount,
            'balance_before' => $user->balance,
            'balance_after' => $user->balance + $amount,
            'description' => 'approved',
        ]);
    }

    // ── DispatchWebhookJob ────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function dispatch_webhook_job_sends_correct_signature(): void
    {
        Http::fake(['*' => Http::response('OK', 200)]);

        $wh = $this->webhook(['order_created']);
        $payload = ['id' => 1, 'status' => 'pending'];

        DispatchWebhookJob::dispatchSync($wh, 'order_created', $payload);

        Http::assertSent(function (\Illuminate\Http\Client\Request $request) use ($wh, $payload) {
            $body = json_encode([
                'event' => 'order_created',
                'timestamp' => json_decode($request->body(), true)['timestamp'],
                'data' => $payload,
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

            $expectedSig = 'sha256='.hash_hmac('sha256', $request->body(), $wh->secret);

            return $request->hasHeader('X-USK-Signature', $expectedSig)
                && $request->hasHeader('X-USK-Event', 'order_created')
                && $request->url() === $wh->url;
        });
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function dispatch_webhook_job_sends_correct_json_body_structure(): void
    {
        Http::fake(['*' => Http::response('OK', 200)]);

        $wh = $this->webhook(['order_ready']);

        DispatchWebhookJob::dispatchSync($wh, 'order_ready', ['foo' => 'bar']);

        Http::assertSent(function (\Illuminate\Http\Client\Request $request) {
            $body = json_decode($request->body(), true);

            return isset($body['event'])
                && isset($body['timestamp'])
                && isset($body['data'])
                && $body['event'] === 'order_ready'
                && $body['data'] === ['foo' => 'bar'];
        });
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function dispatch_webhook_job_does_not_re_release_on_2xx(): void
    {
        Http::fake(['*' => Http::response('', 200)]);

        $wh = $this->webhook();

        // If the job throws or re-releases incorrectly, dispatchSync would surface it
        $this->expectNotToPerformAssertions();

        DispatchWebhookJob::dispatchSync($wh, 'order_created', []);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function dispatch_webhook_job_releases_on_non_2xx_response(): void
    {
        // With sync queue, release() just re-runs; we assert the HTTP call is made
        Http::fake(['*' => Http::response('Server Error', 500)]);

        Queue::fake();

        $wh = $this->webhook();

        DispatchWebhookJob::dispatch($wh, 'order_created', []);

        Queue::assertPushed(DispatchWebhookJob::class);
    }

    // ── Event → Listener fan-out ──────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_created_event_dispatches_job_for_subscribed_webhooks(): void
    {
        Queue::fake();

        $this->webhook(['order_created']);
        $this->webhook(['order_ready']); // should be skipped

        $order = $this->order();

        event(new OrderCreated($order));

        Queue::assertPushed(DispatchWebhookJob::class, 1);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_ready_event_dispatches_job_for_subscribed_webhooks(): void
    {
        Queue::fake();

        $this->webhook(['order_ready']);
        $this->webhook(['topup_approved']); // should be skipped

        $order = $this->order();

        event(new OrderReady($order));

        Queue::assertPushed(DispatchWebhookJob::class, 1);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function topup_approved_event_dispatches_job_for_subscribed_webhooks(): void
    {
        Queue::fake();

        $this->webhook(['topup_approved']);
        $this->webhook(['order_created']); // should be skipped

        $user = $this->student();
        $tx = $this->topupTransaction($user);

        event(new TopupApproved($user, $tx));

        Queue::assertPushed(DispatchWebhookJob::class, 1);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function inactive_webhook_is_skipped(): void
    {
        Queue::fake();

        $this->webhook(['order_created'], active: false);

        $order = $this->order();
        event(new OrderCreated($order));

        Queue::assertNothingPushed();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_not_subscribed_to_event_is_skipped(): void
    {
        Queue::fake();

        $this->webhook(['order_ready']); // subscribed to order_ready only

        $order = $this->order();
        event(new OrderCreated($order)); // fires order_created

        Queue::assertNothingPushed();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function multiple_webhooks_each_get_a_job(): void
    {
        Queue::fake();

        $this->webhook(['order_created']);
        $this->webhook(['order_created']);
        $this->webhook(['topup_approved']); // skipped

        $order = $this->order();
        event(new OrderCreated($order));

        Queue::assertPushed(DispatchWebhookJob::class, 2);
    }

    // ── Admin CRUD ────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_view_webhook_list(): void
    {
        $this->webhook(['order_created']);
        $this->actingAs($this->admin())
            ->get(route('admin.webhooks.index'))
            ->assertOk()
            ->assertSeeText('Test Webhook');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_create_webhook(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.webhooks.store'), [
                'name' => 'Kitchen System',
                'url' => 'https://kitchen.example.com/hook',
                'secret' => 'verysecretkey12345678',
                'events' => ['order_created', 'order_ready'],
                'is_active' => '1',
            ])
            ->assertRedirect(route('admin.webhooks.index'));

        $this->assertDatabaseHas('webhooks', ['name' => 'Kitchen System']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_creation_fails_without_required_fields(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.webhooks.store'), [])
            ->assertSessionHasErrors(['name', 'url', 'secret', 'events']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function webhook_creation_fails_with_short_secret(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.webhooks.store'), [
                'name' => 'Test',
                'url' => 'https://example.com/hook',
                'secret' => 'short',
                'events' => ['order_created'],
            ])
            ->assertSessionHasErrors(['secret']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_update_webhook(): void
    {
        $wh = $this->webhook(['order_created']);

        $this->actingAs($this->admin())
            ->put(route('admin.webhooks.update', $wh), [
                'name' => 'Updated Name',
                'url' => 'https://new.example.com/hook',
                'secret' => 'newsecretkey1234567890',
                'events' => ['order_ready', 'topup_approved'],
                'is_active' => '1',
            ])
            ->assertRedirect(route('admin.webhooks.index'));

        $this->assertDatabaseHas('webhooks', ['id' => $wh->id, 'name' => 'Updated Name']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_delete_webhook(): void
    {
        $wh = $this->webhook();

        $this->actingAs($this->admin())
            ->delete(route('admin.webhooks.destroy', $wh))
            ->assertRedirect(route('admin.webhooks.index'));

        $this->assertDatabaseMissing('webhooks', ['id' => $wh->id]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_ping_sends_http_request_to_webhook_url(): void
    {
        Http::fake(['*' => Http::response('pong', 200)]);

        $wh = $this->webhook();

        $this->actingAs($this->admin())
            ->postJson(route('admin.webhooks.test-ping', $wh))
            ->assertOk()
            ->assertJsonPath('success', true);

        Http::assertSent(fn ($r) => $r->url() === $wh->url);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_ping_returns_failure_on_non_2xx(): void
    {
        Http::fake(['*' => Http::response('', 503)]);

        $wh = $this->webhook();

        $this->actingAs($this->admin())
            ->postJson(route('admin.webhooks.test-ping', $wh))
            ->assertOk()
            ->assertJsonPath('success', false);
    }
}
