<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Immutable audit record of every impersonation session.
 *
 * Records are never updated or deleted — only ended_at is stamped
 * when the admin reverts back to their own session.
 */
class ImpersonationLog extends Model
{
    protected $fillable = [
        'impersonator_id',
        'target_user_id',
        'ip_address',
        'user_agent',
        'started_at',
        'ended_at',
    ];

    protected function casts(): array
    {
        return [
            'started_at' => 'datetime',
            'ended_at' => 'datetime',
        ];
    }

    // ── Relationships ────────────────────────────────────────────────────────

    public function impersonator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'impersonator_id')->withTrashed();
    }

    public function target(): BelongsTo
    {
        return $this->belongsTo(User::class, 'target_user_id')->withTrashed();
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    public function isActive(): bool
    {
        return $this->ended_at === null;
    }
}
