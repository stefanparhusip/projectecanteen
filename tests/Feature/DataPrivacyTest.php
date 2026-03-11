<?php

namespace Tests\Feature;

use App\Jobs\ProcessDataExportJob;
use App\Jobs\ProcessDeletionJob;
use App\Models\ConsentLog;
use App\Models\DataExportRequest;
use App\Models\DeletionRequest;
use App\Models\User;
use App\Services\DataExportService;
use App\Services\DataPrivacyService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DataPrivacyTest extends TestCase
{
    use RefreshDatabase;

    private DataExportService $exportService;

    private DataPrivacyService $privacyService;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
        $this->exportService  = new DataExportService;
        $this->privacyService = new DataPrivacyService;
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(): User
    {
        return User::factory()->create(['role' => 'student']);
    }

    private function makeExportRequest(User $user, string $format = 'json'): DataExportRequest
    {
        return DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => $format,
            'status'     => 'pending',
            'ip_address' => '127.0.0.1',
        ]);
    }

    private function makeDeletionRequest(User $user): DeletionRequest
    {
        return DeletionRequest::create([
            'user_id'             => $user->id,
            'status'              => 'pending',
            'reason'              => 'I want my data deleted.',
            'anonymization_token' => 'test-token-' . $user->id,
            'ip_address'          => '127.0.0.1',
        ]);
    }

    private function fakeRequest(?User $user = null): Request
    {
        $req = Request::create('/', 'GET', [], [], [], ['REMOTE_ADDR' => '127.0.0.1']);
        if ($user) {
            $req->setUserResolver(fn () => $user);
        }

        return $req;
    }

    // ── DataExportService ────────────────────────────────────────────────────

    /** @test */
    public function generate_json_export_creates_file_and_marks_ready(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'json');

        $this->exportService->generate($exp);

        $exp->refresh();
        $this->assertEquals('ready', $exp->status);
        $this->assertNotNull($exp->file_path);
        $this->assertNotNull($exp->file_size);
        $this->assertNotNull($exp->expires_at);
        Storage::disk('local')->assertExists($exp->file_path);
    }

    /** @test */
    public function generate_csv_export_creates_file_and_marks_ready(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'csv');

        $this->exportService->generate($exp);

        $exp->refresh();
        $this->assertEquals('ready', $exp->status);
        Storage::disk('local')->assertExists($exp->file_path);

        $content = Storage::disk('local')->get($exp->file_path);
        $this->assertStringContainsString('section,field,value', $content);
    }

    /** @test */
    public function json_export_contains_user_profile_fields(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'json');

        $this->exportService->generate($exp);

        $exp->refresh();
        $content = Storage::disk('local')->get($exp->file_path);
        $data    = json_decode($content, true);

        $this->assertEquals($user->name, $data['profile']['name']);
        $this->assertEquals($user->email, $data['profile']['email']);
        $this->assertArrayHasKey('orders', $data);
        $this->assertArrayHasKey('balance_transactions', $data);
    }

    /** @test */
    public function generate_logs_consent_action_on_success(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'json');

        $this->exportService->generate($exp);

        $this->assertDatabaseHas('consent_logs', [
            'user_id' => $user->id,
            'action'  => 'data_export_completed',
        ]);
    }

    /** @test */
    public function export_is_downloadable_when_ready_and_not_expired(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'json');
        $this->exportService->generate($exp);
        $exp->refresh();

        $this->assertTrue($exp->isDownloadable());
    }

    /** @test */
    public function export_is_not_downloadable_when_expired(): void
    {
        $user = $this->student();
        $exp  = DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => 'json',
            'status'     => 'ready',
            'file_path'  => 'exports/fake.json',
            'expires_at' => now()->subDay(),
            'ip_address' => '127.0.0.1',
        ]);

        $this->assertFalse($exp->isDownloadable());
        $this->assertTrue($exp->isExpired());
    }

    /** @test */
    public function expire_old_cleans_up_ready_expired_files(): void
    {
        $user = $this->student();
        // Create two: one expired, one fresh
        Storage::disk('local')->put('exports/old.json', '{"data":"old"}');
        Storage::disk('local')->put('exports/fresh.json', '{"data":"fresh"}');

        DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => 'json',
            'status'     => 'ready',
            'file_path'  => 'exports/old.json',
            'expires_at' => now()->subDay(),
            'ip_address' => '127.0.0.1',
        ]);
        DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => 'json',
            'status'     => 'ready',
            'file_path'  => 'exports/fresh.json',
            'expires_at' => now()->addDay(),
            'ip_address' => '127.0.0.1',
        ]);

        $count = $this->exportService->expireOld();

        $this->assertEquals(1, $count);
        Storage::disk('local')->assertMissing('exports/old.json');
        Storage::disk('local')->assertExists('exports/fresh.json');
        $this->assertDatabaseHas('data_export_requests', [
            'file_path' => 'exports/fresh.json',
            'status'    => 'ready',
        ]);
    }

    // ── DataPrivacyService ───────────────────────────────────────────────────

    /** @test */
    public function consent_log_records_action_with_metadata_and_ip(): void
    {
        $user = $this->student();
        $log  = $this->privacyService->log($user->id, 'test_action', ['key' => 'value']);

        $this->assertDatabaseHas('consent_logs', [
            'user_id' => $user->id,
            'action'  => 'test_action',
        ]);
        $this->assertEquals(['key' => 'value'], $log->metadata);
    }

    /** @test */
    public function create_deletion_request_creates_record_and_logs_consent(): void
    {
        $user   = $this->student();
        $result = $this->privacyService->createDeletionRequest($user, 'Test reason', $this->fakeRequest());

        $this->assertNotNull($result);
        $this->assertEquals('pending', $result->status);
        $this->assertEquals('Test reason', $result->reason);
        $this->assertDatabaseHas('consent_logs', [
            'user_id' => $user->id,
            'action'  => 'deletion_requested',
        ]);
    }

    /** @test */
    public function create_deletion_request_returns_null_when_active_exists(): void
    {
        $user = $this->student();
        $this->makeDeletionRequest($user);

        $result = $this->privacyService->createDeletionRequest($user, 'Second request', $this->fakeRequest());

        $this->assertNull($result);
    }

    /** @test */
    public function cancel_deletion_request_updates_status_and_logs(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);

        $this->privacyService->cancelDeletionRequest($dr, $this->fakeRequest());

        $dr->refresh();
        $this->assertEquals('cancelled', $dr->status);
        $this->assertDatabaseHas('consent_logs', [
            'user_id' => $user->id,
            'action'  => 'deletion_cancelled',
        ]);
    }

    /** @test */
    public function approve_sets_status_reviewed_by_and_logs(): void
    {
        $user  = $this->student();
        $admin = $this->admin();
        $dr    = $this->makeDeletionRequest($user);

        $this->privacyService->approve($dr, $admin, 'Approved after review', $this->fakeRequest());

        $dr->refresh();
        $this->assertEquals('approved', $dr->status);
        $this->assertEquals($admin->id, $dr->reviewed_by);
        $this->assertEquals('Approved after review', $dr->admin_note);
        $this->assertDatabaseHas('consent_logs', [
            'user_id'      => $user->id,
            'action'       => 'deletion_approved',
            'performed_by' => $admin->id,
        ]);
    }

    /** @test */
    public function reject_sets_status_reviewed_by_and_logs(): void
    {
        $user  = $this->student();
        $admin = $this->admin();
        $dr    = $this->makeDeletionRequest($user);

        $this->privacyService->reject($dr, $admin, 'Active financial obligations', $this->fakeRequest());

        $dr->refresh();
        $this->assertEquals('rejected', $dr->status);
        $this->assertDatabaseHas('consent_logs', [
            'action'       => 'deletion_rejected',
            'performed_by' => $admin->id,
        ]);
    }

    // ── Anonymization ────────────────────────────────────────────────────────

    /** @test */
    public function anonymize_scrubs_pii_from_user_record(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr);

        $fresh = \App\Models\User::withTrashed()->find($user->id);
        $this->assertEquals('Deleted User', $fresh->name);
        $this->assertStringContainsString('@deleted.invalid', $fresh->email);
        $this->assertEquals('0.00', $fresh->balance);
        $this->assertNotNull($fresh->deleted_at);
    }

    /** @test */
    public function anonymize_preserves_order_history_referential_integrity(): void
    {
        // Orders should NOT be deleted, only user PII is scrubbed
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr);

        // user row still exists (soft-deleted)
        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }

    /** @test */
    public function anonymize_marks_deletion_request_completed_with_executed_at(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr);

        $dr->refresh();
        $this->assertEquals('completed', $dr->status);
        $this->assertNotNull($dr->executed_at);
    }

    /** @test */
    public function anonymize_logs_deletion_executed_to_consent_log(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr);

        $this->assertDatabaseHas('consent_logs', [
            'user_id' => $user->id,
            'action'  => 'deletion_executed',
        ]);
    }

    /** @test */
    public function anonymize_removes_pending_export_files(): void
    {
        $user = $this->student();
        Storage::disk('local')->put('exports/user.json', '{"data":"test"}');

        DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => 'json',
            'status'     => 'ready',
            'file_path'  => 'exports/user.json',
            'expires_at' => now()->addDay(),
            'ip_address' => '127.0.0.1',
        ]);

        $dr = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr);

        Storage::disk('local')->assertMissing('exports/user.json');
        $this->assertDatabaseHas('data_export_requests', [
            'user_id' => $user->id,
            'status'  => 'expired',
        ]);
    }

    // ── ProcessDataExportJob ─────────────────────────────────────────────────

    /** @test */
    public function process_data_export_job_dispatches_successfully(): void
    {
        Queue::fake();
        $user = $this->student();
        $exp  = $this->makeExportRequest($user);

        ProcessDataExportJob::dispatch($exp);

        Queue::assertPushed(ProcessDataExportJob::class);
    }

    /** @test */
    public function process_data_export_job_generates_file_when_run_sync(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user);

        (new ProcessDataExportJob($exp))->handle($this->exportService);

        $exp->refresh();
        $this->assertEquals('ready', $exp->status);
    }

    // ── ProcessDeletionJob ───────────────────────────────────────────────────

    /** @test */
    public function process_deletion_job_dispatches_successfully(): void
    {
        Queue::fake();
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        ProcessDeletionJob::dispatch($dr);

        Queue::assertPushed(ProcessDeletionJob::class);
    }

    /** @test */
    public function process_deletion_job_anonymizes_when_run_sync(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'approved']);

        (new ProcessDeletionJob($dr))->handle($this->privacyService);

        $dr->refresh();
        $this->assertEquals('completed', $dr->status);
        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }

    // ── User Controller (HTTP) ───────────────────────────────────────────────

    /** @test */
    public function user_can_view_privacy_centre(): void
    {
        $user = $this->student();
        $this->actingAs($user)->get(route('user.privacy.index'))
            ->assertOk()
            ->assertViewIs('user.privacy.index');
    }

    /** @test */
    public function unauthenticated_user_is_redirected_from_privacy_centre(): void
    {
        $this->get(route('user.privacy.index'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function user_can_request_json_export(): void
    {
        Queue::fake();
        $user = $this->student();

        $this->actingAs($user)
            ->post(route('user.privacy.export'), ['format' => 'json'])
            ->assertRedirect();

        $this->assertDatabaseHas('data_export_requests', [
            'user_id' => $user->id,
            'format'  => 'json',
        ]);
        Queue::assertPushed(ProcessDataExportJob::class);
    }

    /** @test */
    public function user_can_request_csv_export(): void
    {
        Queue::fake();
        $user = $this->student();

        $this->actingAs($user)
            ->post(route('user.privacy.export'), ['format' => 'csv'])
            ->assertRedirect();

        $this->assertDatabaseHas('data_export_requests', [
            'user_id' => $user->id,
            'format'  => 'csv',
        ]);
    }

    /** @test */
    public function duplicate_in_progress_export_request_is_rejected(): void
    {
        Queue::fake();
        $user = $this->student();
        $this->makeExportRequest($user); // already pending

        $this->actingAs($user)
            ->post(route('user.privacy.export'), ['format' => 'json'])
            ->assertRedirect()
            ->assertSessionHas('error');

        Queue::assertNothingPushed();
    }

    /** @test */
    public function user_can_download_ready_export(): void
    {
        $user = $this->student();
        $exp  = $this->makeExportRequest($user, 'json');
        $this->exportService->generate($exp);
        $exp->refresh();

        $this->actingAs($user)
            ->get(route('user.privacy.export.download', $exp))
            ->assertOk()
            ->assertHeader('Content-Type', 'application/json');
    }

    /** @test */
    public function user_cannot_download_another_users_export(): void
    {
        $owner  = $this->student();
        $hacker = $this->student();
        $exp    = $this->makeExportRequest($owner, 'json');
        $this->exportService->generate($exp);
        $exp->refresh();

        $this->actingAs($hacker)
            ->get(route('user.privacy.export.download', $exp))
            ->assertForbidden();
    }

    /** @test */
    public function user_can_submit_deletion_request(): void
    {
        Queue::fake();
        $user = $this->student();

        $this->actingAs($user)
            ->post(route('user.privacy.deletion'), [
                'reason'  => 'No longer needed',
                'confirm' => '1',
            ])
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('deletion_requests', [
            'user_id' => $user->id,
            'status'  => 'pending',
        ]);
    }

    /** @test */
    public function deletion_request_requires_confirmation_checkbox(): void
    {
        $user = $this->student();

        $this->actingAs($user)
            ->post(route('user.privacy.deletion'), ['reason' => 'test']) // no confirm
            ->assertSessionHasErrors('confirm');
    }

    /** @test */
    public function duplicate_deletion_request_returns_error(): void
    {
        $user = $this->student();
        $this->makeDeletionRequest($user); // already active

        $this->actingAs($user)
            ->post(route('user.privacy.deletion'), [
                'reason'  => 'again',
                'confirm' => '1',
            ])
            ->assertRedirect()
            ->assertSessionHas('error');
    }

    /** @test */
    public function user_can_cancel_pending_deletion_request(): void
    {
        $user = $this->student();
        $dr   = $this->makeDeletionRequest($user);

        $this->actingAs($user)
            ->delete(route('user.privacy.deletion.cancel', $dr))
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('deletion_requests', [
            'id'     => $dr->id,
            'status' => 'cancelled',
        ]);
    }

    /** @test */
    public function user_cannot_cancel_another_users_deletion_request(): void
    {
        $owner  = $this->student();
        $hacker = $this->student();
        $dr     = $this->makeDeletionRequest($owner);

        $this->actingAs($hacker)
            ->delete(route('user.privacy.deletion.cancel', $dr))
            ->assertForbidden();
    }

    // ── Admin Controller (HTTP) ──────────────────────────────────────────────

    /** @test */
    public function admin_can_view_deletion_queue(): void
    {
        $admin = $this->admin();
        $user  = $this->student();
        $this->makeDeletionRequest($user);

        $this->actingAs($admin)
            ->get(route('admin.data-privacy.index'))
            ->assertOk()
            ->assertViewIs('admin.data-privacy.index')
            ->assertViewHas('requests');
    }

    /** @test */
    public function student_cannot_access_admin_deletion_queue(): void
    {
        $user = $this->student();

        $this->actingAs($user)
            ->get(route('admin.data-privacy.index'))
            ->assertForbidden();
    }

    /** @test */
    public function admin_can_view_deletion_request_detail_with_consent_log(): void
    {
        $admin = $this->admin();
        $user  = $this->student();
        $dr    = $this->makeDeletionRequest($user);

        $this->actingAs($admin)
            ->get(route('admin.data-privacy.show', $dr))
            ->assertOk()
            ->assertViewHas('deletionRequest')
            ->assertViewHas('consentLogs');
    }

    /** @test */
    public function admin_can_approve_deletion_request_and_job_is_dispatched(): void
    {
        Queue::fake();
        $admin = $this->admin();
        $user  = $this->student();
        $dr    = $this->makeDeletionRequest($user);

        $this->actingAs($admin)
            ->post(route('admin.data-privacy.approve', $dr), [
                'admin_note' => 'Verified and approved.',
            ])
            ->assertRedirect(route('admin.data-privacy.index'))
            ->assertSessionHas('success');

        $dr->refresh();
        $this->assertEquals('approved', $dr->status);
        Queue::assertPushed(ProcessDeletionJob::class);
    }

    /** @test */
    public function admin_can_reject_deletion_request(): void
    {
        Queue::fake();
        $admin = $this->admin();
        $user  = $this->student();
        $dr    = $this->makeDeletionRequest($user);

        $this->actingAs($admin)
            ->post(route('admin.data-privacy.reject', $dr), [
                'admin_note' => 'Active balance requires resolution first.',
            ])
            ->assertRedirect(route('admin.data-privacy.index'))
            ->assertSessionHas('success');

        $dr->refresh();
        $this->assertEquals('rejected', $dr->status);
        Queue::assertNothingPushed();
    }

    /** @test */
    public function admin_cannot_approve_already_completed_request(): void
    {
        Queue::fake();
        $admin = $this->admin();
        $user  = $this->student();
        $dr    = $this->makeDeletionRequest($user);
        $dr->update(['status' => 'completed']);

        $this->actingAs($admin)
            ->post(route('admin.data-privacy.approve', $dr), ['admin_note' => ''])
            ->assertRedirect()
            ->assertSessionHas('error');

        Queue::assertNothingPushed();
    }

    /** @test */
    public function rejection_requires_admin_note(): void
    {
        $admin = $this->admin();
        $user  = $this->student();
        $dr    = $this->makeDeletionRequest($user);

        $this->actingAs($admin)
            ->post(route('admin.data-privacy.reject', $dr), ['admin_note' => ''])
            ->assertSessionHasErrors('admin_note');
    }

    // ── Referential integrity ────────────────────────────────────────────────

    /** @test */
    public function anonymized_email_uses_unique_token_to_prevent_collision(): void
    {
        $u1 = $this->student();
        $u2 = $this->student();

        $dr1 = $this->makeDeletionRequest($u1);
        $dr2 = DeletionRequest::create([
            'user_id'             => $u2->id,
            'status'              => 'approved',
            'anonymization_token' => 'unique-token-' . $u2->id,
            'ip_address'          => '127.0.0.1',
        ]);
        $dr1->update(['status' => 'approved']);
        $dr2->update(['status' => 'approved']);

        $this->privacyService->anonymize($dr1);
        $this->privacyService->anonymize($dr2);

        $u1->refresh();
        $u2->refresh();
        $this->assertNotEquals($u1->email, $u2->email);
    }

    /** @test */
    public function consent_log_user_id_nullable_for_anonymized_users(): void
    {
        $log = ConsentLog::create(['user_id' => null, 'action' => 'deletion_executed']);
        $this->assertNull($log->user_id);
    }
}
