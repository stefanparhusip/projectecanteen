<?php

namespace Tests\Feature;

use App\Jobs\ProcessBulkExport;
use App\Models\BalanceTransaction;
use App\Models\BreakTime;
use App\Models\Category;
use App\Models\ExportJob;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

/**
 * Feature tests for the Admin Bulk-Export & PDF Invoice system.
 *
 * Coverage:
 *  - Export index page is accessible to admins
 *  - Non-admins are redirected from export pages
 *  - Store creates an ExportJob record and dispatches the job
 *  - Validation rejects an unknown export type
 *  - Filters (date_from/date_to) are stored on the ExportJob
 *  - ProcessBulkExport job transitions status: pending → processing → done
 *  - Transaction export writes a valid CSV file with correct row count
 *  - Order export writes a valid CSV file
 *  - User export writes a valid CSV file
 *  - Completed export file can be downloaded
 *  - Download returns 404 when export is still pending
 *  - Destroy deletes the record (and file when present)
 *  - PDF invoice returns 200 with application/pdf content-type
 *  - PDF invoice returns 404 for a deleted (trashed) order
 */
class ExportTest extends TestCase
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
            'label' => 'Slot Test',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '23:59:00',
        ]);
    }

    private function makeOrder(User $user, BreakTime $bt, float $total = 15_000): Order
    {
        $cat = Category::firstOrCreate(['name' => 'Makanan'], ['description' => '']);
        $menu = Menu::firstOrCreate(
            ['name' => 'Nasi Goreng'],
            ['category_id' => $cat->id, 'price' => $total, 'stock' => 10, 'is_available' => true]
        );

        $order = Order::create([
            'user_id' => $user->id,
            'break_time_id' => $bt->id,
            'status' => Order::STATUS_PENDING,
            'total_price' => $total,
            'ordered_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => $order->id,
            'menu_id' => $menu->id,
            'menu_name' => $menu->name,
            'menu_price' => $total,
            'quantity' => 1,
            'subtotal' => $total,
        ]);

        return $order;
    }

    private function makeTransaction(User $user, float $amount = 50_000): BalanceTransaction
    {
        return BalanceTransaction::create([
            'user_id' => $user->id,
            'type' => BalanceTransaction::TYPE_TOPUP,
            'amount' => $amount,
            'balance_before' => $user->balance,
            'balance_after' => $user->balance + $amount,
            'note' => 'Top-up test',
        ]);
    }

    // ── Access Control ────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function export_index_is_accessible_to_admin(): void
    {
        $admin = $this->admin();
        $this->actingAs($admin)
            ->get('/admin/exports')
            ->assertOk()
            ->assertSee('Export Data');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function non_admin_cannot_access_export_index(): void
    {
        $user = $this->student();
        $this->actingAs($user)
            ->get('/admin/exports')
            ->assertForbidden();
    }

    // ── Store ─────────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function store_creates_export_job_and_dispatches_job(): void
    {
        Queue::fake();
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post('/admin/exports', ['type' => 'transactions'])
            ->assertRedirect('/admin/exports');

        $this->assertDatabaseHas('export_jobs', [
            'user_id' => $admin->id,
            'type' => 'transactions',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        Queue::assertPushed(ProcessBulkExport::class);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function store_validates_unknown_export_type(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post('/admin/exports', ['type' => 'invalid_type'])
            ->assertSessionHasErrors('type');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function store_persists_filters_on_export_job(): void
    {
        Queue::fake();
        $admin = $this->admin();

        $this->actingAs($admin)->post('/admin/exports', [
            'type' => 'orders',
            'date_from' => '2026-01-01',
            'date_to' => '2026-01-31',
            'status' => 'collected',
        ]);

        $job = ExportJob::where('user_id', $admin->id)->first();
        $this->assertNotNull($job);
        $this->assertEquals('2026-01-01', $job->filters['date_from']);
        $this->assertEquals('2026-01-31', $job->filters['date_to']);
        $this->assertEquals('collected', $job->filters['status']);
    }

    // ── ProcessBulkExport job ─────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function transaction_export_writes_csv_file(): void
    {
        Storage::fake('local');
        $admin = $this->admin();
        $user = $this->student();

        $this->makeTransaction($user, 50_000);

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        (new ProcessBulkExport($exportJob))->handle();

        $exportJob->refresh();
        $this->assertEquals(ExportJob::STATUS_DONE, $exportJob->status);
        $this->assertEquals(1, $exportJob->row_count);
        $this->assertNotNull($exportJob->file_path);
        Storage::disk('local')->assertExists($exportJob->file_path);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_export_writes_csv_file(): void
    {
        Storage::fake('local');
        $admin = $this->admin();
        $user = $this->student();
        $bt = $this->breakTime();
        $this->makeOrder($user, $bt);

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_ORDERS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        (new ProcessBulkExport($exportJob))->handle();

        $exportJob->refresh();
        $this->assertEquals(ExportJob::STATUS_DONE, $exportJob->status);
        $this->assertEquals(1, $exportJob->row_count);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_export_writes_csv_file(): void
    {
        Storage::fake('local');
        $admin = $this->admin();
        $this->student();
        $this->student();

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_USERS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        (new ProcessBulkExport($exportJob))->handle();

        $exportJob->refresh();
        $this->assertEquals(ExportJob::STATUS_DONE, $exportJob->status);
        // 2 students + 1 admin = 3 users
        $this->assertEquals(3, $exportJob->row_count);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function export_job_transitions_status_correctly(): void
    {
        Storage::fake('local');
        $admin = $this->admin();

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        $this->assertEquals(ExportJob::STATUS_PENDING, $exportJob->status);

        (new ProcessBulkExport($exportJob))->handle();
        $exportJob->refresh();

        $this->assertEquals(ExportJob::STATUS_DONE, $exportJob->status);
        $this->assertNotNull($exportJob->started_at);
        $this->assertNotNull($exportJob->finished_at);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function large_export_uses_chunked_query_and_stays_within_memory(): void
    {
        Storage::fake('local');
        $admin = $this->admin();

        // Create 150 transactions (3× chunk of 50 to exercise chunking logic)
        $user = $this->student();
        for ($i = 0; $i < 150; $i++) {
            $this->makeTransaction($user, 10_000);
        }

        $memBefore = memory_get_usage(true);

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        (new ProcessBulkExport($exportJob))->handle();

        $memAfter = memory_get_usage(true);

        $exportJob->refresh();
        $this->assertEquals(150, $exportJob->row_count);

        // Chunked processing should not balloon memory excessively
        // Allow up to 32 MB growth (typical SQLite in-memory overhead)
        $memDeltaMB = ($memAfter - $memBefore) / (1024 * 1024);
        $this->assertLessThan(32, $memDeltaMB, "Memory usage grew by {$memDeltaMB} MB, expected < 32 MB");
    }

    // ── Download ──────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function completed_export_can_be_downloaded(): void
    {
        Storage::fake('local');
        $admin = $this->admin();

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_DONE,
            'file_path' => 'exports/transactions_99.csv',
            'row_count' => 0,
        ]);
        Storage::disk('local')->put('exports/transactions_99.csv', "ID,User\n");

        $this->actingAs($admin)
            ->get("/admin/exports/{$exportJob->id}/download")
            ->assertOk()
            ->assertHeader('content-disposition');
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function download_returns_404_when_export_is_pending(): void
    {
        $admin = $this->admin();

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_PENDING,
        ]);

        $this->actingAs($admin)
            ->get("/admin/exports/{$exportJob->id}/download")
            ->assertNotFound();
    }

    // ── Destroy ───────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function destroy_deletes_export_record_and_file(): void
    {
        Storage::fake('local');
        $admin = $this->admin();

        Storage::disk('local')->put('exports/transactions_88.csv', "ID\n");

        $exportJob = ExportJob::create([
            'user_id' => $admin->id,
            'type' => ExportJob::TYPE_TRANSACTIONS,
            'format' => 'csv',
            'status' => ExportJob::STATUS_DONE,
            'file_path' => 'exports/transactions_88.csv',
        ]);

        $this->actingAs($admin)
            ->delete("/admin/exports/{$exportJob->id}")
            ->assertRedirect('/admin/exports');

        $this->assertDatabaseMissing('export_jobs', ['id' => $exportJob->id]);
        Storage::disk('local')->assertMissing('exports/transactions_88.csv');
    }

    // ── PDF Invoice ───────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function pdf_invoice_returns_200_with_pdf_content_type(): void
    {
        $admin = $this->admin();
        $user = $this->student();
        $bt = $this->breakTime();
        $order = $this->makeOrder($user, $bt);

        $response = $this->actingAs($admin)
            ->get("/admin/orders/{$order->id}/invoice");

        $response->assertOk();
        $this->assertStringContainsString('application/pdf', $response->headers->get('content-type'));
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function pdf_invoice_returns_404_for_nonexistent_order(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->get('/admin/orders/99999/invoice')
            ->assertNotFound();
    }
}
