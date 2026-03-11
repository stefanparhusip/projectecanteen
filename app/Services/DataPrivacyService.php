<?php

namespace App\Services;

use App\Models\ConsentLog;
use App\Models\DeletionRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DataPrivacyService
{
    /**
     * Log a consent or privacy action to the immutable audit trail.
     */
    public function log(
        ?int $userId,
        string $action,
        array $metadata = [],
        ?Request $request = null,
        ?int $performedBy = null
    ): ConsentLog {
        return ConsentLog::create([
            'user_id'      => $userId,
            'action'       => $action,
            'metadata'     => $metadata ?: null,
            'ip_address'   => $request?->ip(),
            'user_agent'   => $request ? substr($request->userAgent() ?? '', 0, 512) : null,
            'performed_by' => $performedBy,
        ]);
    }

    /**
     * Create a new deletion request for a user and log consent withdrawal.
     * Returns null if an active request already exists.
     */
    public function createDeletionRequest(
        User $user,
        ?string $reason,
        Request $request
    ): ?DeletionRequest {
        $existing = DeletionRequest::query()
            ->where('user_id', $user->id)
            ->whereIn('status', ['pending', 'under_review', 'approved', 'processing'])
            ->first();

        if ($existing) {
            return null;
        }

        $deletionRequest = DeletionRequest::create([
            'user_id'             => $user->id,
            'status'              => 'pending',
            'reason'              => $reason,
            'anonymization_token' => Str::random(32),
            'ip_address'          => $request->ip(),
        ]);

        $this->log(
            userId: $user->id,
            action: 'deletion_requested',
            metadata: ['deletion_request_id' => $deletionRequest->id],
            request: $request,
        );

        return $deletionRequest;
    }

    /**
     * Cancel a pending deletion request by the owning user.
     */
    public function cancelDeletionRequest(DeletionRequest $dr, Request $request): void
    {
        $dr->update(['status' => 'cancelled']);

        $this->log(
            userId: $dr->user_id,
            action: 'deletion_cancelled',
            metadata: ['deletion_request_id' => $dr->id],
            request: $request,
        );
    }

    /**
     * Admin approves the deletion request — status moves to "approved",
     * ready for the async job to execute.
     */
    public function approve(DeletionRequest $dr, User $admin, ?string $note, Request $request): void
    {
        $dr->update([
            'status'      => 'approved',
            'admin_note'  => $note,
            'reviewed_by' => $admin->id,
            'reviewed_at' => Carbon::now(),
        ]);

        $this->log(
            userId: $dr->user_id,
            action: 'deletion_approved',
            metadata: ['deletion_request_id' => $dr->id, 'admin_id' => $admin->id],
            request: $request,
            performedBy: $admin->id,
        );
    }

    /**
     * Admin rejects the deletion request.
     */
    public function reject(DeletionRequest $dr, User $admin, ?string $note, Request $request): void
    {
        $dr->update([
            'status'      => 'rejected',
            'admin_note'  => $note,
            'reviewed_by' => $admin->id,
            'reviewed_at' => Carbon::now(),
        ]);

        $this->log(
            userId: $dr->user_id,
            action: 'deletion_rejected',
            metadata: ['deletion_request_id' => $dr->id, 'admin_id' => $admin->id],
            request: $request,
            performedBy: $admin->id,
        );
    }

    /**
     * Execute anonymization: scrub PII from the user record while
     * preserving order/transaction history for business integrity.
     */
    public function anonymize(DeletionRequest $dr): void
    {
        $dr->update(['status' => 'processing']);

        $user  = $dr->user;
        $token = $dr->anonymization_token;

        // 1. Remove any pending export files for this user
        $user->dataExportRequests()
            ->whereIn('status', ['pending', 'processing', 'ready'])
            ->get()
            ->each(function ($exp) {
                if ($exp->file_path && Storage::disk('local')->exists($exp->file_path)) {
                    Storage::disk('local')->delete($exp->file_path);
                }
                $exp->update(['status' => 'expired', 'file_path' => null]);
            });

        // 2. Revoke all API tokens (Sanctum)
        $user->tokens()->delete();

        // 3. Scrub PII from the user record
        $user->forceFill([
            'name'           => 'Deleted User',
            'email'          => "deleted_{$token}@deleted.invalid",
            'password'       => Hash::make(Str::random(64)),
            'remember_token' => null,
            'balance'        => 0,
        ])->save();

        // 4. Soft-delete the user account
        $user->delete();

        // 5. Finalize the deletion request
        $dr->update([
            'status'      => 'completed',
            'executed_at' => Carbon::now(),
        ]);

        // 6. Log the execution (user_id preserved for audit; email is already scrubbed)
        $this->log(
            userId: $dr->user_id,
            action: 'deletion_executed',
            metadata: [
                'deletion_request_id' => $dr->id,
                'anonymization_token'  => $token,
            ],
        );
    }
}
