<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    protected $fillable = [
        'class_name',
        'break_time_id',
        'created_by_user_id',
        'code',
        'status',
        'payment_mode',
        'payer_user_id',
        'note',
    ];

    // ── Status constants ──────────────────────────────────────────────────────

    const STATUS_OPEN = 'open';

    const STATUS_LOCKED = 'locked';

    const STATUS_CHECKED_OUT = 'checked_out';

    const STATUS_CANCELLED = 'cancelled';

    const STATUS_LABELS = [
        self::STATUS_OPEN => 'Terbuka',
        self::STATUS_LOCKED => 'Terkunci',
        self::STATUS_CHECKED_OUT => 'Lunas',
        self::STATUS_CANCELLED => 'Dibatalkan',
    ];

    const STATUS_COLORS = [
        self::STATUS_OPEN => 'success',
        self::STATUS_LOCKED => 'warning',
        self::STATUS_CHECKED_OUT => 'info',
        self::STATUS_CANCELLED => 'secondary',
    ];

    // ── Accessors ─────────────────────────────────────────────────────────────

    public function getStatusLabelAttribute(): string
    {
        return self::STATUS_LABELS[$this->status] ?? $this->status;
    }

    public function getStatusColorAttribute(): string
    {
        return self::STATUS_COLORS[$this->status] ?? 'secondary';
    }

    // ── Status helpers ────────────────────────────────────────────────────────

    public function isOpen(): bool
    {
        return $this->status === self::STATUS_OPEN;
    }

    public function isLocked(): bool
    {
        return $this->status === self::STATUS_LOCKED;
    }

    public function isCheckedOut(): bool
    {
        return $this->status === self::STATUS_CHECKED_OUT;
    }

    public function isCancelled(): bool
    {
        return $this->status === self::STATUS_CANCELLED;
    }

    // ── Business helpers ──────────────────────────────────────────────────────

    /** Total nilai seluruh batch (sum subtotal anggota aktif) */
    public function totalPrice(): float
    {
        return (float) $this->members->sum('subtotal');
    }

    /** Kembalikan BatchMember untuk user tertentu, atau null */
    public function memberFor(int $userId): ?BatchMember
    {
        return $this->members->firstWhere('user_id', $userId);
    }

    // ── Relations ─────────────────────────────────────────────────────────────

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id')->withTrashed();
    }

    public function payer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'payer_user_id')->withTrashed();
    }

    public function breakTime(): BelongsTo
    {
        return $this->belongsTo(BreakTime::class);
    }

    public function members(): HasMany
    {
        return $this->hasMany(BatchMember::class);
    }
}
