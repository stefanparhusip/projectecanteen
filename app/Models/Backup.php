<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Backup extends Model
{
    protected $fillable = [
        'driver',
        'filename',
        'disk_path',
        'size_bytes',
        'checksum',
        'retention_days',
        'status',
        'note',
    ];

    protected function casts(): array
    {
        return [
            'size_bytes' => 'integer',
            'retention_days' => 'integer',
        ];
    }

    // ── Accessors ────────────────────────────────────────────────────────────

    /** Human-readable file size, e.g. "1.4 MB" */
    public function getHumanSizeAttribute(): string
    {
        $bytes = $this->size_bytes;
        if ($bytes < 1_024) {
            return "{$bytes} B";
        }
        if ($bytes < 1_048_576) {
            return round($bytes / 1_024, 1).' KB';
        }

        return round($bytes / 1_048_576, 2).' MB';
    }

    /** Date this backup expires (created_at + retention_days) */
    public function getExpiresAtAttribute(): Carbon
    {
        return $this->created_at->copy()->addDays($this->retention_days);
    }

    public function isExpired(): bool
    {
        return $this->expires_at->isPast();
    }

    // ── Relations ────────────────────────────────────────────────────────────

    public function restoreRequests(): HasMany
    {
        return $this->hasMany(BackupRestoreRequest::class);
    }
}
