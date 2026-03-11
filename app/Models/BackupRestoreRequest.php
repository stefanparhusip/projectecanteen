<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BackupRestoreRequest extends Model
{
    protected $table = 'restore_requests';

    protected $fillable = [
        'backup_id',
        'requested_by',
        'status',
        'reason',
        'note',
        'completed_at',
    ];

    protected function casts(): array
    {
        return [
            'completed_at' => 'datetime',
        ];
    }

    // ── Relations ────────────────────────────────────────────────────────────

    public function backup(): BelongsTo
    {
        return $this->belongsTo(Backup::class);
    }

    public function requester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by');
    }
}
