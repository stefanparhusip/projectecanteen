<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExportJob extends Model
{
    public const TYPE_TRANSACTIONS = 'transactions';

    public const TYPE_ORDERS = 'orders';

    public const TYPE_USERS = 'users';

    public const STATUS_PENDING = 'pending';

    public const STATUS_PROCESSING = 'processing';

    public const STATUS_DONE = 'done';

    public const STATUS_FAILED = 'failed';

    protected $fillable = [
        'user_id',
        'type',
        'format',
        'filters',
        'status',
        'file_path',
        'row_count',
        'error_message',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'filters' => 'array',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    // ── Relations ────────────────────────────────────────────────────────────

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // ── Scopes ───────────────────────────────────────────────────────────────

    public function scopePending($q)
    {
        return $q->where('status', self::STATUS_PENDING);
    }

    public function scopeDone($q)
    {
        return $q->where('status', self::STATUS_DONE);
    }

    public function scopeFailed($q)
    {
        return $q->where('status', self::STATUS_FAILED);
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    public function markProcessing(): void
    {
        $this->update(['status' => self::STATUS_PROCESSING, 'started_at' => now()]);
    }

    public function markDone(string $path, int $rows): void
    {
        $this->update([
            'status' => self::STATUS_DONE,
            'file_path' => $path,
            'row_count' => $rows,
            'finished_at' => now(),
        ]);
    }

    public function markFailed(string $message): void
    {
        $this->update([
            'status' => self::STATUS_FAILED,
            'error_message' => $message,
            'finished_at' => now(),
        ]);
    }
}
