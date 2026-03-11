<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RestockRequest extends Model
{
    public const STATUS_PENDING = 'pending';

    public const STATUS_APPROVED = 'approved';

    public const STATUS_REJECTED = 'rejected';

    protected $fillable = [
        'menu_id',
        'stock_alert_id',
        'requested_stock',
        'status',
        'is_auto',
        'requested_by',
        'approved_by',
        'notes',
        'approved_at',
    ];

    protected function casts(): array
    {
        return [
            'is_auto' => 'boolean',
            'approved_at' => 'datetime',
        ];
    }

    // ── Helpers ───────────────────────────────────────────────────────────────

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    // ── Relations ─────────────────────────────────────────────────────────────

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function stockAlert(): BelongsTo
    {
        return $this->belongsTo(StockAlert::class);
    }

    public function requester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
