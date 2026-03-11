<?php

namespace Tests\Feature;

use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Feature tests for the Refund & Reconciliation system.
 *
 * Coverage:
 *  - Bulk-refund creates BalanceTransaction records atomically
 *  - Refund amount matches order total_price exactly
 *  - Already-cancelled orders are silently skipped (idempotent)
 *  - Multiple orders all get refunded in one bulk call
 *  - Mixed-status batch: only cancellable orders are processed
 *  - CSV export returns correct Content-Type and header row
 *  - Transaction index page is accessible and returns 200
 *  - GenerateReconciliationReport command creates the JSON file
 */
class RefundTransactionTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(float $balance = 50000): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => $balance]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Test Slot',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '09:45:00',
        ]);
    }

    private function order(User $user, BreakTime $slot, float $total = 15000, string $status = Order::STATUS_PENDING): Order
    {
        return Order::create([
            'user_id' => $user->id,
            'break_time_id' => $slot->id,
            'status' => $status,
            'total_price' => $total,
        ]);
    }

    // ── Tests ─────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function bulk_refund_creates_balance_transaction_for_each_order(): void
    {
        $admin = $this->admin();
        $user = $this->student(50000);
        $slot = $this->breakTime();
        $order1 = $this->order($user, $slot, 15000, Order::STATUS_PENDING);
        $order2 = $this->order($user, $slot, 20000, Order::STATUS_PREPARING);

        $this->actingAs($admin)->post(route('admin.transactions.bulk-refund.process'), [
            'order_ids' => [$order1->id, $order2->id],
            'reason' => 'Test bulk refund',
        ]);

        $this->assertDatabaseCount('balance_transactions', 2);
        $this->assertDatabaseHas('balance_transactions', [
            'order_id' => $order1->id,
            'type' => BalanceTransaction::TYPE_REFUND,
            'amount' => 15000,
        ]);
        $this->assertDatabaseHas('balance_transactions', [
            'order_id' => $order2->id,
            'type' => BalanceTransaction::TYPE_REFUND,
            'amount' => 20000,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function refund_amount_matches_order_total_and_balance_is_restored(): void
    {
        $admin = $this->admin();
        $user = $this->student(30000);
        $slot = $this->breakTime();
        $order = $this->order($user, $slot, 12500, Order::STATUS_PENDING);

        $this->actingAs($admin)->post(route('admin.transactions.bulk-refund.process'), [
            'order_ids' => [$order->id],
        ]);

        $tx = BalanceTransaction::where('order_id', $order->id)->first();
        $this->assertNotNull($tx);
        $this->assertEquals(12500, (float) $tx->amount);
        $this->assertEquals(30000, (float) $tx->balance_before);
        $this->assertEquals(42500, (float) $tx->balance_after);

        $user->refresh();
        $this->assertEquals(42500, (float) $user->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_is_set_to_cancelled_after_refund(): void
    {
        $admin = $this->admin();
        $user = $this->student(20000);
        $slot = $this->breakTime();
        $order = $this->order($user, $slot, 10000, Order::STATUS_PREPARING);

        $this->actingAs($admin)->post(route('admin.transactions.bulk-refund.process'), [
            'order_ids' => [$order->id],
        ]);

        $order->refresh();
        $this->assertEquals(Order::STATUS_CANCELLED, $order->status);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function already_cancelled_order_is_skipped_without_duplicate_refund(): void
    {
        $admin = $this->admin();
        $user = $this->student(50000);
        $slot = $this->breakTime();
        $order = $this->order($user, $slot, 10000, Order::STATUS_CANCELLED);

        $this->actingAs($admin)->post(route('admin.transactions.bulk-refund.process'), [
            'order_ids' => [$order->id],
        ]);

        // No refund transaction should be created for an already-cancelled order
        $this->assertDatabaseCount('balance_transactions', 0);
        // User balance unchanged
        $user->refresh();
        $this->assertEquals(50000, (float) $user->balance);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function bulk_refund_skips_non_refundable_and_processes_refundable(): void
    {
        $admin = $this->admin();
        $user = $this->student(100000);
        $slot = $this->breakTime();
        $pending = $this->order($user, $slot, 10000, Order::STATUS_PENDING);
        $ready = $this->order($user, $slot, 20000, Order::STATUS_READY);     // not refundable
        $done = $this->order($user, $slot, 30000, Order::STATUS_COLLECTED);  // not refundable

        $this->actingAs($admin)->post(route('admin.transactions.bulk-refund.process'), [
            'order_ids' => [$pending->id, $ready->id, $done->id],
        ]);

        // Only pending order gets a refund record
        $this->assertDatabaseCount('balance_transactions', 1);
        $this->assertDatabaseHas('balance_transactions', [
            'order_id' => $pending->id,
            'type' => BalanceTransaction::TYPE_REFUND,
        ]);
        // ready/collected orders untouched
        $ready->refresh();
        $done->refresh();
        $this->assertEquals(Order::STATUS_READY, $ready->status);
        $this->assertEquals(Order::STATUS_COLLECTED, $done->status);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function export_csv_returns_text_csv_content_type(): void
    {
        $admin = $this->admin();

        $response = $this->actingAs($admin)->get(route('admin.transactions.export'));

        $response->assertStatus(200);
        $this->assertStringContainsString('text/csv', $response->headers->get('Content-Type'));
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function export_csv_contains_header_row(): void
    {
        $admin = $this->admin();
        $user = $this->student();
        $slot = $this->breakTime();

        BalanceTransaction::create([
            'user_id' => $user->id,
            'order_id' => null,
            'type' => BalanceTransaction::TYPE_TOPUP,
            'amount' => 50000,
            'balance_before' => 0,
            'balance_after' => 50000,
            'description' => 'Test topup',
        ]);

        $response = $this->actingAs($admin)->get(route('admin.transactions.export'));

        $content = $response->getContent();
        // Strip UTF-8 BOM if present
        $content = ltrim($content, "\xEF\xBB\xBF");
        $this->assertStringContainsString('ID', $content);
        $this->assertStringContainsString('Tipe', $content);
        $this->assertStringContainsString('Jumlah', $content);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function transaction_index_page_is_accessible_to_admin(): void
    {
        $admin = $this->admin();

        $response = $this->actingAs($admin)->get(route('admin.transactions.index'));

        $response->assertStatus(200);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function reconciliation_command_creates_json_report_file(): void
    {
        $user = $this->student(100000);

        BalanceTransaction::create([
            'user_id' => $user->id,
            'order_id' => null,
            'type' => BalanceTransaction::TYPE_TOPUP,
            'amount' => 50000,
            'balance_before' => 50000,
            'balance_after' => 100000,
            'description' => 'Test',
        ]);

        $date = now()->toDateString();
        $filePath = storage_path("app/reports/reconciliation/{$date}.json");

        // Remove any pre-existing file from a previous run
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $this->artisan('reports:reconcile', ['--date' => $date])
            ->assertExitCode(0);

        $this->assertFileExists($filePath);

        $report = json_decode(file_get_contents($filePath), true);
        $this->assertEquals($date, $report['date']);
        $this->assertEquals(1, $report['transaction_count']);
        $this->assertEquals(50000, $report['total_topup']);
        $this->assertEquals(0, $report['total_debit']);
        $this->assertEquals(0, $report['total_refund']);
    }
}
