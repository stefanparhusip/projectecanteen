<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BatchMember extends Model
{
    protected $fillable = [
        'batch_id',
        'user_id',
        'subtotal',
        'payment_status',
        'order_id',
    ];

    protected function casts(): array
    {
        return ['subtotal' => 'decimal:2'];
    }

    // ── Payment status helpers ────────────────────────────────────────────────

    public function isPending(): bool
    {
        return $this->payment_status === 'pending';
    }

    public function isPaid(): bool
    {
        return $this->payment_status === 'paid';
    }

    public function isWaived(): bool
    {
        return $this->payment_status === 'waived';
    }

    // ── Relations ─────────────────────────────────────────────────────────────

    public function batch(): BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function items(): HasMany
    {
        return $this->hasMany(BatchMemberItem::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class)->withTrashed();
    }
}
