<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\HealthCheckService;
use App\Services\MetricsService;
use App\Services\SentryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class HealthMonitoringTest extends TestCase
{
    use RefreshDatabase;

    // ── SentryService ────────────────────────────────────────────────────────

    /** @test */
    public function sentry_service_is_disabled_when_dsn_not_configured(): void
    {
        config(['sentry.dsn' => null]);
        $service = new SentryService;

        $this->assertFalse($service->isEnabled());
        // Should return null gracefully (not throw)
        $this->assertNull($service->capture(new \RuntimeException('test')));
        $this->assertNull($service->captureMessage('test message'));
    }

    /** @test */
    public function sentry_service_is_enabled_when_dsn_configured(): void
    {
        config(['sentry.dsn' => 'https://fake@o0.ingest.sentry.io/0']);
        $service = new SentryService;

        $this->assertTrue($service->isEnabled());
    }

    // ── HealthCheckService ───────────────────────────────────────────────────

    /** @test */
    public function health_check_returns_all_required_keys(): void
    {
        $result = (new HealthCheckService)->all();

        $this->assertArrayHasKey('database', $result);
        $this->assertArrayHasKey('cache', $result);
        $this->assertArrayHasKey('storage', $result);
        $this->assertArrayHasKey('queue', $result);
        $this->assertArrayHasKey('cron', $result);
        $this->assertArrayHasKey('sentry', $result);
    }

    /** @test */
    public function health_check_database_returns_ok_with_response_time(): void
    {
        $result = (new HealthCheckService)->checkDatabase();

        $this->assertEquals('ok', $result['status']);
        $this->assertArrayHasKey('response_ms', $result);
        $this->assertIsFloat($result['response_ms']);
    }

    /** @test */
    public function health_check_cache_returns_ok(): void
    {
        $result = (new HealthCheckService)->checkCache();

        $this->assertEquals('ok', $result['status']);
    }

    /** @test */
    public function health_check_storage_returns_ok(): void
    {
        $result = (new HealthCheckService)->checkStorage();

        $this->assertEquals('ok', $result['status']);
    }

    /** @test */
    public function health_check_queue_returns_pending_and_failed_counts(): void
    {
        $result = (new HealthCheckService)->checkQueue();

        $this->assertArrayHasKey('status', $result);
        $this->assertArrayHasKey('pending', $result);
        $this->assertArrayHasKey('failed', $result);
        $this->assertArrayHasKey('driver', $result);
    }

    /** @test */
    public function health_check_sentry_shows_not_configured_without_dsn(): void
    {
        config(['sentry.dsn' => null]);
        $result = (new HealthCheckService)->checkSentry();

        $this->assertEquals('not_configured', $result['status']);
        $this->assertFalse($result['dsn_set']);
    }

    /** @test */
    public function cron_ping_records_timestamp_to_cache(): void
    {
        HealthCheckService::pingCron('backup:run');

        $val = Cache::get(HealthCheckService::CRON_CACHE_PREFIX.'backup:run');
        $this->assertNotNull($val);
        $this->assertEqualsWithDelta(now()->timestamp, $val, 2);
    }

    /** @test */
    public function cron_check_returns_unknown_before_first_run(): void
    {
        Cache::forget(HealthCheckService::CRON_CACHE_PREFIX.'backup:run');

        $result = (new HealthCheckService)->checkCron();

        $this->assertEquals('unknown', $result['backup:run']['status']);
    }

    /** @test */
    public function cron_check_returns_late_when_ping_is_stale(): void
    {
        // Set ping to 26 hours ago — backup:run max_lag_hours = 25
        Cache::put(
            HealthCheckService::CRON_CACHE_PREFIX.'backup:run',
            now()->subHours(26)->timestamp,
            86400
        );

        $result = (new HealthCheckService)->checkCron();

        $this->assertEquals('late', $result['backup:run']['status']);
    }

    /** @test */
    public function cron_check_returns_ok_when_ping_is_fresh(): void
    {
        HealthCheckService::pingCron('backup:run');

        $result = (new HealthCheckService)->checkCron();

        $this->assertEquals('ok', $result['backup:run']['status']);
    }

    // ── MetricsService ───────────────────────────────────────────────────────

    /** @test */
    public function metrics_service_renders_valid_prometheus_text(): void
    {
        $output = (new MetricsService)->render();

        $this->assertStringContainsString('# HELP', $output);
        $this->assertStringContainsString('# TYPE', $output);
        $this->assertStringContainsString('app_queue_pending_total', $output);
        $this->assertStringContainsString('app_queue_failed_total', $output);
        $this->assertStringContainsString('app_cron_last_run_timestamp_seconds', $output);
        $this->assertStringContainsString('app_db_response_time_milliseconds', $output);
    }

    /** @test */
    public function metrics_output_contains_order_metrics_section(): void
    {
        $output = (new MetricsService)->render();

        $this->assertStringContainsString('app_orders_total', $output);
        $this->assertStringContainsString('app_orders_today_total', $output);
    }

    // ── /metrics API Endpoint ────────────────────────────────────────────────

    /** @test */
    public function metrics_endpoint_requires_bearer_token(): void
    {
        config(['app.metrics_secret' => 'test-secret-xyz']);

        $this->getJson('/api/metrics')
            ->assertStatus(401);
    }

    /** @test */
    public function metrics_endpoint_returns_403_when_secret_not_configured(): void
    {
        config(['app.metrics_secret' => '']);

        $this->getJson('/api/metrics')
            ->assertStatus(403);
    }

    /** @test */
    public function metrics_endpoint_accessible_with_valid_bearer_token(): void
    {
        config(['app.metrics_secret' => 'test-secret-xyz']);

        $this->withToken('test-secret-xyz')
            ->get('/api/metrics')
            ->assertOk()
            ->assertHeader('Content-Type', 'text/plain; version=0.0.4; charset=utf-8');
    }

    /** @test */
    public function metrics_endpoint_returns_prometheus_format(): void
    {
        config(['app.metrics_secret' => 'test-secret-xyz']);

        $body = $this->withToken('test-secret-xyz')
            ->get('/api/metrics')
            ->assertOk()
            ->getContent();

        $this->assertStringContainsString('app_queue_pending_total', $body);
        $this->assertStringContainsString('app_db_response_time_milliseconds', $body);
    }

    // ── Admin Health Page ────────────────────────────────────────────────────

    /** @test */
    public function admin_health_page_is_accessible_for_admin(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)
            ->get(route('admin.health.index'))
            ->assertOk()
            ->assertViewIs('admin.health.index')
            ->assertViewHas('checks')
            ->assertViewHas('stats');
    }

    /** @test */
    public function health_page_forbidden_for_non_admin(): void
    {
        $user = User::factory()->create(['role' => 'student']);

        $this->actingAs($user)
            ->get(route('admin.health.index'))
            ->assertForbidden();
    }

    // ── Simulated Exception Alerting ─────────────────────────────────────────

    /** @test */
    public function super_admin_can_trigger_test_exception_and_sentry_is_called(): void
    {
        $super = User::factory()->create(['role' => 'admin', 'is_super_admin' => true]);

        $sentryMock = $this->mock(SentryService::class);
        $sentryMock->shouldReceive('isSuperAdmin')->andReturn(true);
        $sentryMock->shouldReceive('isEnabled')->andReturn(false);
        $sentryMock->shouldReceive('capture')->once()->andReturn(null);
        $sentryMock->shouldReceive('captureMessage')->once()->andReturn(null);

        $this->actingAs($super)
            ->post(route('admin.health.trigger-exception'))
            ->assertRedirect()
            ->assertSessionHas('info');
    }

    /** @test */
    public function non_super_admin_cannot_trigger_test_exception(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'is_super_admin' => false]);

        $this->actingAs($admin)
            ->post(route('admin.health.trigger-exception'))
            ->assertForbidden();
    }

    /** @test */
    public function guest_cannot_access_health_page(): void
    {
        $this->get(route('admin.health.index'))
            ->assertRedirect(route('login'));
    }
}
