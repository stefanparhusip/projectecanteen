<?php

namespace Tests\Feature;

use App\Jobs\AutoRestockJob;
use App\Models\Category;
use App\Models\Menu;
use App\Models\RestockRequest;
use App\Models\StockAlert;
use App\Models\User;
use App\Notifications\LowStockNotification;
use App\Services\StockAlertService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class StockAlertTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function menu(int $stock = 20, ?int $threshold = null, bool $autoRestock = false, ?int $defaultStock = null): Menu
    {
        $cat = Category::create(['name' => 'Test Cat'.uniqid()]);
        $data = [
            'name' => 'Test Menu',
            'price' => 10_000,
            'stock' => $stock,
            'category_id' => $cat->id,
            'low_stock_threshold' => $threshold,
            'auto_restock_enabled' => $autoRestock,
        ];

        // default_stock column is NOT NULL DEFAULT 0 — only set explicitly when non-null
        if ($defaultStock !== null) {
            $data['default_stock'] = $defaultStock;
        }

        return Menu::create($data);
    }

    private function service(): StockAlertService
    {
        return app(StockAlertService::class);
    }

    // ── Threshold trigger logic ───────────────────────────────────────────────

    public function test_no_alert_when_stock_above_threshold(): void
    {
        $this->menu(stock: 10, threshold: 5);

        $count = $this->service()->checkAll();

        $this->assertEquals(0, $count);
        $this->assertDatabaseCount('stock_alerts', 0);
    }

    public function test_alert_created_when_stock_equals_threshold(): void
    {
        Notification::fake();
        $this->menu(stock: 5, threshold: 5);

        $count = $this->service()->checkAll();

        $this->assertEquals(1, $count);
        $this->assertDatabaseCount('stock_alerts', 1);
    }

    public function test_alert_created_when_stock_below_threshold(): void
    {
        Notification::fake();
        $this->menu(stock: 2, threshold: 5);

        $this->service()->checkAll();

        $this->assertDatabaseHas('stock_alerts', ['stock_at_alert' => 2, 'threshold' => 5]);
    }

    public function test_no_alert_when_threshold_is_null(): void
    {
        $this->menu(stock: 0, threshold: null);

        $count = $this->service()->checkAll();

        $this->assertEquals(0, $count);
        $this->assertDatabaseCount('stock_alerts', 0);
    }

    public function test_no_duplicate_alert_for_same_unresolved_state(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 3, threshold: 5);

        $this->service()->checkAll();
        $this->service()->checkAll(); // Second run — should not create a second alert

        $this->assertDatabaseCount('stock_alerts', 1);
    }

    public function test_new_alert_created_after_previous_is_resolved(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 3, threshold: 5);

        $this->service()->checkAll();

        // Resolve the alert and run again
        StockAlert::first()->update(['resolved_at' => now()]);

        $this->service()->checkAll();

        $this->assertDatabaseCount('stock_alerts', 2);
    }

    // ── Dry-run ───────────────────────────────────────────────────────────────

    public function test_dry_run_does_not_persist_alerts(): void
    {
        $this->menu(stock: 3, threshold: 5);

        $count = $this->service()->checkAll(dryRun: true);

        $this->assertEquals(1, $count);
        $this->assertDatabaseCount('stock_alerts', 0);
    }

    public function test_artisan_command_dry_run(): void
    {
        $this->menu(stock: 3, threshold: 5);

        $this->artisan('stock:check-alerts --dry-run')
            ->assertExitCode(0)
            ->expectsOutputToContain('would create 1');

        $this->assertDatabaseCount('stock_alerts', 0);
    }

    // ── Notification ──────────────────────────────────────────────────────────

    public function test_low_stock_notification_sent_to_admins(): void
    {
        Notification::fake();

        $admin = $this->admin();
        $this->menu(stock: 3, threshold: 5);

        $this->service()->checkAll();

        Notification::assertSentTo($admin, LowStockNotification::class, function ($n) {
            return $n->alert->stock_at_alert === 3 && $n->alert->threshold === 5;
        });
    }

    public function test_notification_not_sent_when_no_low_stock(): void
    {
        Notification::fake();
        $this->admin();
        $this->menu(stock: 10, threshold: 5);

        $this->service()->checkAll();

        Notification::assertNothingSent();
    }

    // ── Auto-restock ──────────────────────────────────────────────────────────

    public function test_auto_restock_job_creates_restock_request(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 2, threshold: 5, autoRestock: true, defaultStock: 20);

        $this->service()->checkAll();

        $this->assertDatabaseHas('restock_requests', [
            'menu_id' => $menu->id,
            'status' => RestockRequest::STATUS_PENDING,
            'is_auto' => true,
            'requested_stock' => 20,   // uses default_stock
        ]);

        $this->assertTrue(StockAlert::first()->auto_restock_triggered);
    }

    public function test_auto_restock_uses_threshold_multiplier_when_no_default_stock(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 2, threshold: 5, autoRestock: true, defaultStock: null);

        $this->service()->checkAll();

        $this->assertDatabaseHas('restock_requests', [
            'menu_id' => $menu->id,
            'requested_stock' => 15, // 5 × 3
        ]);
    }

    public function test_auto_restock_not_triggered_when_disabled(): void
    {
        Notification::fake();
        $this->menu(stock: 2, threshold: 5, autoRestock: false);

        $this->service()->checkAll();

        $this->assertDatabaseCount('restock_requests', 0);
        $this->assertFalse(StockAlert::first()->auto_restock_triggered);
    }

    public function test_auto_restock_job_skips_duplicate_pending_request(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 2, threshold: 5, autoRestock: true, defaultStock: 20);
        $alert = StockAlert::create(['menu_id' => $menu->id, 'stock_at_alert' => 2, 'threshold' => 5]);

        // Pre-existing pending request
        RestockRequest::create(['menu_id' => $menu->id, 'requested_stock' => 5, 'status' => 'pending']);

        // Dispatch the job directly
        AutoRestockJob::dispatch($menu->id, $alert->id);

        // Still only one request
        $this->assertDatabaseCount('restock_requests', 1);
    }

    // ── Admin: Stock Alerts CRUD ──────────────────────────────────────────────

    public function test_admin_can_view_stock_alerts(): void
    {
        $menu = $this->menu(stock: 2, threshold: 5);
        StockAlert::create(['menu_id' => $menu->id, 'stock_at_alert' => 2, 'threshold' => 5]);

        Notification::fake();

        $this->actingAs($this->admin())
            ->get(route('admin.stock-alerts.index'))
            ->assertOk()
            ->assertSee('Test Menu');
    }

    public function test_admin_can_resolve_stock_alert(): void
    {
        $menu = $this->menu(stock: 2, threshold: 5);
        $alert = StockAlert::create(['menu_id' => $menu->id, 'stock_at_alert' => 2, 'threshold' => 5]);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.stock-alerts.resolve', $alert))
            ->assertRedirect();

        $this->assertNotNull($alert->fresh()->resolved_at);
    }

    public function test_resolving_already_resolved_alert_is_idempotent(): void
    {
        $menu = $this->menu(stock: 2, threshold: 5);
        $alert = StockAlert::create([
            'menu_id' => $menu->id,
            'stock_at_alert' => 2,
            'threshold' => 5,
            'resolved_at' => now()->subMinute(),
        ]);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.stock-alerts.resolve', $alert))
            ->assertRedirect();

        // Still resolved (no error thrown)
        $this->assertNotNull($alert->fresh()->resolved_at);
    }

    // ── Admin: Restock Requests ───────────────────────────────────────────────

    public function test_admin_can_view_restock_requests(): void
    {
        $menu = $this->menu();
        RestockRequest::create(['menu_id' => $menu->id, 'requested_stock' => 10, 'status' => 'pending']);

        $this->actingAs($this->admin())
            ->get(route('admin.restock-requests.index'))
            ->assertOk()
            ->assertSee('Test Menu');
    }

    public function test_admin_can_approve_restock_request_and_stock_increases(): void
    {
        $menu = $this->menu(stock: 3);
        $request = RestockRequest::create(['menu_id' => $menu->id, 'requested_stock' => 10, 'status' => 'pending']);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.restock-requests.approve', $request))
            ->assertRedirect();

        $this->assertEquals(RestockRequest::STATUS_APPROVED, $request->fresh()->status);
        $this->assertEquals(13, $menu->fresh()->stock); // 3 + 10
    }

    public function test_approve_resolves_linked_stock_alert(): void
    {
        Notification::fake();
        $menu = $this->menu(stock: 2, threshold: 5);
        $alert = StockAlert::create(['menu_id' => $menu->id, 'stock_at_alert' => 2, 'threshold' => 5]);
        $req = RestockRequest::create([
            'menu_id' => $menu->id,
            'stock_alert_id' => $alert->id,
            'requested_stock' => 20,
            'status' => 'pending',
        ]);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.restock-requests.approve', $req))
            ->assertRedirect();

        $this->assertNotNull($alert->fresh()->resolved_at);
    }

    public function test_admin_can_reject_restock_request(): void
    {
        $menu = $this->menu(stock: 3);
        $request = RestockRequest::create(['menu_id' => $menu->id, 'requested_stock' => 10, 'status' => 'pending']);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.restock-requests.reject', $request))
            ->assertRedirect();

        $this->assertEquals(RestockRequest::STATUS_REJECTED, $request->fresh()->status);
        $this->assertEquals(3, $menu->fresh()->stock); // unchanged
    }

    public function test_already_approved_request_cannot_be_approved_again(): void
    {
        $menu = $this->menu(stock: 3);
        $request = RestockRequest::create([
            'menu_id' => $menu->id,
            'requested_stock' => 10,
            'status' => RestockRequest::STATUS_APPROVED,
        ]);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.restock-requests.approve', $request))
            ->assertRedirect();

        $this->assertEquals(3, $menu->fresh()->stock); // unchanged
    }

    public function test_admin_can_create_manual_restock_request(): void
    {
        $menu = $this->menu();
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.restock-requests.store'), [
                'menu_id' => $menu->id,
                'requested_stock' => 15,
                'notes' => 'Persiapan hari raya',
            ])
            ->assertRedirect(route('admin.restock-requests.index'));

        $this->assertDatabaseHas('restock_requests', [
            'menu_id' => $menu->id,
            'requested_stock' => 15,
            'is_auto' => false,
            'status' => 'pending',
        ]);
    }
}
