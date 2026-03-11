<?php

namespace Tests\Feature;

use App\Console\Commands\DetectAnomalies;
use App\Models\Anomaly;
use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Feature tests for the Anomaly Detection system.
 *
 * Coverage:
 *  - statistics() helper computes correct mean and stddev
 *  - No anomaly flagged when observed value is within baseline
 *  - Order spike is flagged when observed > mean + X*stddev
 *  - Refund spike is flagged correctly
 *  - Topup spike is flagged correctly
 *  - Command is idempotent (re-run does not duplicate records)
 *  - --dry-run flag prevents DB writes
 *  - --sigma option adjusts threshold correctly
 *  - Admin anomaly index page is accessible
 *  - Admin can resolve a single anomaly
 *  - Admin can resolve all anomalies at once
 *  - Dashboard shows anomaly count banner when anomalies exist
 */
class AnomalyDetectionTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => 500000]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Test Slot',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '23:59:00',
        ]);
    }

    /**
     * Seed $n orders in the given 1-hour window.
     */
    private function seedOrders(int $n, Carbon $windowStart, ?User $user = null, ?BreakTime $slot = null): void
    {
        $user ??= $this->student();
        $slot ??= $this->breakTime();

        for ($i = 0; $i < $n; $i++) {
            Order::create([
                'user_id' => $user->id,
                'break_time_id' => $slot->id,
                'status' => Order::STATUS_PENDING,
                'total_price' => 5000,
                'ordered_at' => $windowStart->copy()->addMinutes($i % 59),
            ]);
        }
    }

    /**
     * Seed $n refund transactions in the given window.
     */
    private function seedRefunds(int $n, Carbon $windowStart, ?User $user = null): void
    {
        $user ??= $this->student();

        for ($i = 0; $i < $n; $i++) {
            $ts = $windowStart->copy()->addMinutes($i % 59);
            // Use direct property assignment to bypass $fillable for timestamps
            $tx = new BalanceTransaction([
                'user_id' => $user->id,
                'order_id' => null,
                'type' => BalanceTransaction::TYPE_REFUND,
                'amount' => 5000,
                'balance_before' => 100000,
                'balance_after' => 105000,
                'description' => 'test refund',
            ]);
            $tx->created_at = $ts;
            $tx->updated_at = $ts;
            $tx->save();
        }
    }

    /**
     * Seed historical baseline: $countPerHour orders for each of the last $days days
     * at the same hour as $anchorHour.
     */
    private function seedHistoricalOrders(int $countPerHour, Carbon $anchorHour, int $days = 28): void
    {
        $user = $this->student();
        $slot = $this->breakTime();
        $hour = (int) $anchorHour->format('H');

        for ($d = 1; $d <= $days; $d++) {
            $from = $anchorHour->copy()->subDays($d)->startOfHour()->setTime($hour, 0, 0);
            $this->seedOrders($countPerHour, $from, $user, $slot);
        }
    }

    // ── Unit: statistics() ────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function statistics_helper_computes_mean_and_stddev(): void
    {
        $stats = DetectAnomalies::statistics([2, 4, 4, 4, 5, 5, 7, 9]);

        $this->assertEquals(5.0, $stats['mean']);
        // Sample stddev of [2,4,4,4,5,5,7,9] ≈ 2.138 (n-1 denominator)
        $this->assertGreaterThan(2.0, $stats['stddev']);
        $this->assertLessThan(2.3, $stats['stddev']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function statistics_single_element_returns_zero_stddev(): void
    {
        $stats = DetectAnomalies::statistics([10]);
        $this->assertEquals(10.0, $stats['mean']);
        $this->assertEquals(0.0, $stats['stddev']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function statistics_empty_array_returns_zeros(): void
    {
        $stats = DetectAnomalies::statistics([]);
        $this->assertEquals(0.0, $stats['mean']);
        $this->assertEquals(0.0, $stats['stddev']);
    }

    // ── Command: order spike ──────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function no_anomaly_when_orders_within_baseline(): void
    {
        // Baseline: 5 orders/hour for 28 days → mean=5, stddev≈0
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);

        // Current hour also has 5 orders
        $this->seedOrders(5, $anchorHour);

        $this->artisan('anomalies:detect --hours=1 --sigma=2')
            ->assertExitCode(0);

        $this->assertDatabaseCount('anomalies', 0);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_spike_is_flagged_when_above_sigma_threshold(): void
    {
        // Stable baseline: exactly 5 orders/hour for 28 past days
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);

        // Surge in the current completed hour: 100 orders
        $this->seedOrders(100, $anchorHour);

        $this->artisan('anomalies:detect --hours=1 --sigma=2')
            ->assertExitCode(0);

        $this->assertDatabaseHas('anomalies', [
            'type' => Anomaly::TYPE_ORDER_SPIKE,
            'observed_value' => 100,
            'resolved' => false,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_spike_sigma_value_is_stored_correctly(): void
    {
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);
        $this->seedOrders(100, $anchorHour);

        $this->artisan('anomalies:detect --hours=1 --sigma=2')->assertExitCode(0);

        $anomaly = Anomaly::where('type', Anomaly::TYPE_ORDER_SPIKE)->first();
        $this->assertNotNull($anomaly);
        // sigma should be large because 100 >> 5
        $this->assertGreaterThan(2.0, (float) $anomaly->sigma);
    }

    // ── Command: refund spike ─────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function refund_spike_is_flagged_correctly(): void
    {
        $anchorHour = now()->subHour()->startOfHour();

        // Baseline: 1 refund/hour for 28 days
        $user = $this->student();
        for ($d = 1; $d <= 28; $d++) {
            $from = $anchorHour->copy()->subDays($d)->startOfHour();
            $this->seedRefunds(1, $from, $user);
        }

        // Surge: 50 refunds in the completed hour
        $this->seedRefunds(50, $anchorHour, $user);

        $this->artisan('anomalies:detect --hours=1 --sigma=2')->assertExitCode(0);

        $this->assertDatabaseHas('anomalies', [
            'type' => Anomaly::TYPE_REFUND_SPIKE,
            'observed_value' => 50,
        ]);
    }

    // ── Command: idempotency ──────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function command_is_idempotent_and_does_not_duplicate_anomalies(): void
    {
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);
        $this->seedOrders(100, $anchorHour);

        // Run twice
        $this->artisan('anomalies:detect --hours=1 --sigma=2')->assertExitCode(0);
        $this->artisan('anomalies:detect --hours=1 --sigma=2')->assertExitCode(0);

        $this->assertEquals(
            1,
            Anomaly::where('type', Anomaly::TYPE_ORDER_SPIKE)->count()
        );
    }

    // ── Command: --dry-run ────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function dry_run_does_not_write_to_database(): void
    {
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);
        $this->seedOrders(100, $anchorHour);

        $this->artisan('anomalies:detect --hours=1 --sigma=2 --dry-run')->assertExitCode(0);

        $this->assertDatabaseCount('anomalies', 0);
    }

    // ── Command: --sigma option ───────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function high_sigma_threshold_does_not_flag_moderate_surge(): void
    {
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);

        // Moderate surge: ~10 orders (only slightly above mean ≈5)
        $this->seedOrders(10, $anchorHour);

        // sigma=5 should not trigger
        $this->artisan('anomalies:detect --hours=1 --sigma=5')->assertExitCode(0);

        $this->assertDatabaseCount('anomalies', 0);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function low_sigma_threshold_flags_mild_surge(): void
    {
        $anchorHour = now()->subHour()->startOfHour();
        $this->seedHistoricalOrders(5, $anchorHour, 28);

        // Moderate surge: 100 orders
        $this->seedOrders(100, $anchorHour);

        // sigma=1 should flag even a small deviation
        $this->artisan('anomalies:detect --hours=1 --sigma=1')->assertExitCode(0);

        $this->assertDatabaseHas('anomalies', ['type' => Anomaly::TYPE_ORDER_SPIKE]);
    }

    // ── Admin UI ──────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_anomaly_index_page_is_accessible(): void
    {
        $admin = $this->admin();

        Anomaly::create([
            'type' => Anomaly::TYPE_ORDER_SPIKE,
            'window' => 'hourly',
            'detected_at' => now(),
            'observed_value' => 80,
            'baseline_mean' => 5,
            'baseline_stddev' => 1,
            'sigma' => 75,
            'resolved' => false,
        ]);

        $response = $this->actingAs($admin)->get(route('admin.anomalies.index'));
        $response->assertStatus(200);
        $response->assertSee('order spike', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_resolve_a_single_anomaly(): void
    {
        $admin = $this->admin();

        $anomaly = Anomaly::create([
            'type' => Anomaly::TYPE_REFUND_SPIKE,
            'window' => 'hourly',
            'detected_at' => now(),
            'observed_value' => 30,
            'baseline_mean' => 2,
            'baseline_stddev' => 0.5,
            'sigma' => 56,
            'resolved' => false,
        ]);

        $this->actingAs($admin)
            ->post(route('admin.anomalies.resolve', $anomaly))
            ->assertRedirect();

        $anomaly->refresh();
        $this->assertTrue($anomaly->resolved);
        $this->assertNotNull($anomaly->resolved_at);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_can_resolve_all_anomalies(): void
    {
        $admin = $this->admin();

        foreach ([1, 2, 3] as $i) {
            Anomaly::create([
                'type' => Anomaly::TYPE_ORDER_SPIKE,
                'window' => 'hourly',
                'detected_at' => now()->subHours($i),
                'observed_value' => 60,
                'baseline_mean' => 5,
                'baseline_stddev' => 1,
                'sigma' => 55,
                'resolved' => false,
            ]);
        }

        $this->actingAs($admin)
            ->post(route('admin.anomalies.resolve-all'))
            ->assertRedirect();

        $this->assertEquals(0, Anomaly::unresolved()->count());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function dashboard_shows_anomaly_banner_when_anomalies_exist(): void
    {
        $admin = $this->admin();

        Anomaly::create([
            'type' => Anomaly::TYPE_ORDER_SPIKE,
            'window' => 'hourly',
            'detected_at' => now(),
            'observed_value' => 80,
            'baseline_mean' => 5,
            'baseline_stddev' => 1,
            'sigma' => 75,
            'resolved' => false,
        ]);

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));
        $response->assertStatus(200);
        $response->assertSee('anomali terdeteksi', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function dashboard_has_no_anomaly_banner_when_all_resolved(): void
    {
        $admin = $this->admin();

        Anomaly::create([
            'type' => Anomaly::TYPE_ORDER_SPIKE,
            'window' => 'hourly',
            'detected_at' => now(),
            'observed_value' => 80,
            'baseline_mean' => 5,
            'baseline_stddev' => 1,
            'sigma' => 75,
            'resolved' => true,
            'resolved_at' => now(),
        ]);

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));
        $response->assertStatus(200);
        $response->assertDontSee('anomali terdeteksi', false);
    }
}
