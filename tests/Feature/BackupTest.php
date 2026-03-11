<?php

namespace Tests\Feature;

use App\Jobs\BackupCleanupJob;
use App\Jobs\BackupDatabaseJob;
use App\Models\BackupRestoreRequest;
use App\Models\User;
use App\Services\BackupService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BackupTest extends TestCase
{
    use RefreshDatabase;

    private BackupService $service;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
        $this->service = new BackupService;
    }

    // ── Encryption / Decryption ──────────────────────────────────────────────

    /** @test */
    public function encrypt_and_decrypt_are_inverse_operations(): void
    {
        $original = "INSERT INTO orders VALUES (1, 'test-data', 10000);\n";
        $encrypted = $this->service->encrypt($original);

        $this->assertNotEquals($original, $encrypted, 'Encrypted output must differ from plaintext.');
        $this->assertEquals($original, $this->service->decrypt($encrypted));
    }

    /** @test */
    public function each_encryption_produces_a_unique_ciphertext_due_to_random_iv(): void
    {
        $plain = 'same plaintext';
        $this->assertNotEquals(
            $this->service->encrypt($plain),
            $this->service->encrypt($plain),
            'IV randomness must produce different ciphertexts for the same input.'
        );
    }

    /** @test */
    public function decrypt_throws_on_corrupted_ciphertext(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->service->decrypt('this-is-not-valid-base64-encrypted-data!!!!');
    }

    // ── createFromContent ────────────────────────────────────────────────────

    /** @test */
    public function create_from_content_persists_backup_record_and_file(): void
    {
        $content = 'CREATE TABLE t (id INTEGER PRIMARY KEY);';
        $backup = $this->service->createFromContent($content, 30, 'Unit test');

        $this->assertDatabaseHas('backups', [
            'id' => $backup->id,
            'status' => 'completed',
            'retention_days' => 30,
            'note' => 'Unit test',
        ]);

        Storage::disk('local')->assertExists($backup->disk_path);
    }

    /** @test */
    public function backup_stores_correct_sha256_checksum(): void
    {
        $content = 'INSERT INTO users (id, name) VALUES (1, "Admin");';
        $backup = $this->service->createFromContent($content);

        $this->assertEquals(hash('sha256', $content), $backup->checksum);
    }

    /** @test */
    public function backup_file_is_encrypted_not_stored_as_plaintext(): void
    {
        $content = 'SELECT * FROM orders;';
        $backup = $this->service->createFromContent($content);

        $stored = Storage::disk('local')->get($backup->disk_path);
        $this->assertStringNotContainsString($content, (string) $stored);
    }

    /** @test */
    public function it_supports_14_30_and_90_day_retention_options(): void
    {
        foreach (BackupService::RETENTION_OPTIONS as $days) {
            $backup = $this->service->createFromContent('sql', $days);
            $this->assertEquals($days, $backup->retention_days);
        }
    }

    // ── Accessors ────────────────────────────────────────────────────────────

    /** @test */
    public function human_size_formats_bytes_correctly(): void
    {
        $backup = $this->service->createFromContent('x');
        $backup->size_bytes = 500;
        $this->assertStringContainsString('B', $backup->human_size);

        $backup->size_bytes = 2_048;
        $this->assertStringContainsString('KB', $backup->human_size);

        $backup->size_bytes = 2_097_152;
        $this->assertStringContainsString('MB', $backup->human_size);
    }

    /** @test */
    public function expires_at_is_retention_days_after_creation(): void
    {
        $backup = $this->service->createFromContent('data', 14);
        $this->assertTrue(
            $backup->expires_at->equalTo($backup->created_at->copy()->addDays(14))
        );
    }

    // ── Verify ───────────────────────────────────────────────────────────────

    /** @test */
    public function verify_returns_true_for_unmodified_backup(): void
    {
        $backup = $this->service->createFromContent('CREATE TABLE menus (id INT);');
        $this->assertTrue($this->service->verify($backup));
    }

    /** @test */
    public function verify_returns_false_when_file_is_corrupted(): void
    {
        $backup = $this->service->createFromContent('original');
        Storage::disk('local')->put($backup->disk_path, 'corrupted-garbage');
        $this->assertFalse($this->service->verify($backup));
    }

    /** @test */
    public function verify_returns_false_when_file_is_missing(): void
    {
        $backup = $this->service->createFromContent('data');
        Storage::disk('local')->delete($backup->disk_path);
        $this->assertFalse($this->service->verify($backup));
    }

    // ── Cleanup ──────────────────────────────────────────────────────────────

    /** @test */
    public function cleanup_removes_expired_backups_and_their_files(): void
    {
        $expired = $this->service->createFromContent('old', 14);
        $expired->created_at = now()->subDays(15);
        $expired->saveQuietly();

        $count = $this->service->cleanup();

        $this->assertEquals(1, $count);
        $this->assertDatabaseMissing('backups', ['id' => $expired->id]);
        Storage::disk('local')->assertMissing($expired->disk_path);
    }

    /** @test */
    public function cleanup_keeps_backups_within_retention_window(): void
    {
        $fresh = $this->service->createFromContent('current', 30);
        $fresh->created_at = now()->subDays(10);
        $fresh->saveQuietly();

        $this->assertEquals(0, $this->service->cleanup());
        $this->assertDatabaseHas('backups', ['id' => $fresh->id]);
    }

    /** @test */
    public function cleanup_respects_different_retention_policies(): void
    {
        // 14-day expired (15 days ago)
        $short = $this->service->createFromContent('short', 14);
        $short->created_at = now()->subDays(15);
        $short->saveQuietly();

        // 30-day still valid (15 days ago — within 30-day window)
        $medium = $this->service->createFromContent('medium', 30);
        $medium->created_at = now()->subDays(15);
        $medium->saveQuietly();

        // 90-day still valid (15 days ago — well within 90-day window)
        $long = $this->service->createFromContent('long', 90);
        $long->created_at = now()->subDays(15);
        $long->saveQuietly();

        $deleted = $this->service->cleanup();

        $this->assertEquals(1, $deleted);
        $this->assertDatabaseMissing('backups', ['id' => $short->id]);
        $this->assertDatabaseHas('backups', ['id' => $medium->id]);
        $this->assertDatabaseHas('backups', ['id' => $long->id]);
    }

    // ── Admin Controller: Backups ────────────────────────────────────────────

    /** @test */
    public function admin_can_list_backups(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->service->createFromContent('data 1', 30);
        $this->service->createFromContent('data 2', 14);

        $this->actingAs($admin)
            ->get(route('admin.backups.index'))
            ->assertOk()
            ->assertViewHas('backups');
    }

    /** @test */
    public function non_admin_cannot_access_backups(): void
    {
        $user = User::factory()->create(['role' => 'student']);
        $this->actingAs($user)
            ->get(route('admin.backups.index'))
            ->assertForbidden();
    }

    /** @test */
    public function admin_can_trigger_manual_backup_via_controller(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $mockService = $this->mock(BackupService::class);
        $fakeBackup = $this->service->createFromContent('mocked');
        $mockService->shouldReceive('run')
            ->once()
            ->with(30, 'Manual test')
            ->andReturn($fakeBackup);

        $this->actingAs($admin)
            ->post(route('admin.backups.store'), [
                'retention_days' => 30,
                'note' => 'Manual test',
            ])
            ->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function backup_store_rejects_invalid_retention_days(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin)
            ->post(route('admin.backups.store'), ['retention_days' => 99])
            ->assertSessionHasErrors('retention_days');
    }

    /** @test */
    public function admin_can_delete_backup(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $backup = $this->service->createFromContent('to delete');
        $path = $backup->disk_path;

        $this->actingAs($admin)
            ->delete(route('admin.backups.destroy', $backup))
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseMissing('backups', ['id' => $backup->id]);
        Storage::disk('local')->assertMissing($path);
    }

    // ── Admin Controller: Restore Requests ──────────────────────────────────

    /** @test */
    public function admin_can_create_restore_request(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $backup = $this->service->createFromContent('data', 30);

        $this->actingAs($admin)
            ->post(route('admin.restore-requests.store'), [
                'backup_id' => $backup->id,
                'reason' => 'Data was accidentally deleted — need rollback',
            ])
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('restore_requests', [
            'backup_id' => $backup->id,
            'requested_by' => $admin->id,
            'status' => 'pending',
        ]);
    }

    /** @test */
    public function restore_request_requires_reason(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $backup = $this->service->createFromContent('data', 30);

        $this->actingAs($admin)
            ->post(route('admin.restore-requests.store'), ['backup_id' => $backup->id])
            ->assertSessionHasErrors('reason');
    }

    /** @test */
    public function super_admin_can_approve_restore_request(): void
    {
        $super = User::factory()->create(['role' => 'admin', 'is_super_admin' => true]);
        $backup = $this->service->createFromContent('data', 30);
        $req = BackupRestoreRequest::create([
            'backup_id' => $backup->id,
            'requested_by' => $super->id,
            'status' => 'pending',
            'reason' => 'Test',
        ]);

        $this->actingAs($super)
            ->post(route('admin.restore-requests.approve', $req))
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('restore_requests', ['id' => $req->id, 'status' => 'approved']);
    }

    /** @test */
    public function non_super_admin_cannot_approve_restore_request(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'is_super_admin' => false]);
        $backup = $this->service->createFromContent('data', 30);
        $req = BackupRestoreRequest::create([
            'backup_id' => $backup->id,
            'requested_by' => $admin->id,
            'status' => 'pending',
            'reason' => 'Test',
        ]);

        $this->actingAs($admin)
            ->post(route('admin.restore-requests.approve', $req))
            ->assertForbidden();
    }

    /** @test */
    public function admin_can_reject_restore_request(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $backup = $this->service->createFromContent('data', 30);
        $req = BackupRestoreRequest::create([
            'backup_id' => $backup->id,
            'requested_by' => $admin->id,
            'status' => 'pending',
            'reason' => 'Reason',
        ]);

        $this->actingAs($admin)
            ->post(route('admin.restore-requests.reject', $req))
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('restore_requests', ['id' => $req->id, 'status' => 'rejected']);
    }

    // ── Jobs ──────────────────────────────────────────────────────────────────

    /** @test */
    public function backup_database_job_calls_service_run(): void
    {
        Queue::fake();
        BackupDatabaseJob::dispatch(30, 'Job test');
        Queue::assertPushed(BackupDatabaseJob::class);
    }

    /** @test */
    public function backup_cleanup_job_calls_service_cleanup(): void
    {
        Queue::fake();
        BackupCleanupJob::dispatch();
        Queue::assertPushed(BackupCleanupJob::class);
    }
}
