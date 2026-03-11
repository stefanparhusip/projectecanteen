<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'break_time_id',
        'status',
        'total_price',
        'discount_amount',
        'promo_ids',
        'note',
        'ordered_at',
        'idempotency_key',
    ];

    protected function casts(): array
    {
        return [
            'total_price' => 'decimal:2',
            'discount_amount' => 'decimal:2',
            'promo_ids' => 'array',
            'ordered_at' => 'datetime',
        ];
    }

    // ── Status Constants ─────────────────────────────────────────────────────

    const STATUS_PENDING = 'pending';

    const STATUS_PREPARING = 'preparing';

    const STATUS_READY = 'ready';

    const STATUS_CANCELLED = 'cancelled';

    const STATUS_COLLECTED = 'collected';

    /** Label status berbahasa Indonesia */
    const STATUS_LABELS = [
        self::STATUS_PENDING => 'Menunggu',
        self::STATUS_PREPARING => 'Sedang Disiapkan',
        self::STATUS_READY => 'Siap Diambil',
        self::STATUS_CANCELLED => 'Dibatalkan',
        self::STATUS_COLLECTED => 'Sudah Diambil',
    ];

    /** Warna Bootstrap badge per status */
    const STATUS_COLORS = [
        self::STATUS_PENDING => 'secondary',
        self::STATUS_PREPARING => 'primary',
        self::STATUS_READY => 'success',
        self::STATUS_CANCELLED => 'danger',
        self::STATUS_COLLECTED => 'info',
    ];

    // ── Accessors / Helpers ───────────────────────────────────────────────────

    /** Label status dalam Bahasa Indonesia */
    public function getStatusLabelAttribute(): string
    {
        return self::STATUS_LABELS[$this->status] ?? $this->status;
    }

    /** Warna Bootstrap badge */
    public function getStatusColorAttribute(): string
    {
        return self::STATUS_COLORS[$this->status] ?? 'secondary';
    }

    public function isPreparing(): bool
    {
        return $this->status === self::STATUS_PREPARING;
    }

    public function isReady(): bool
    {
        return $this->status === self::STATUS_READY;
    }

    public function isCancelled(): bool
    {
        return $this->status === self::STATUS_CANCELLED;
    }

    public function isCollected(): bool
    {
        return $this->status === self::STATUS_COLLECTED;
    }

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** User yang membuat pesanan ini.
     *  Menggunakan withTrashed() agar relasi tidak null
     *  ketika user di-soft-delete sementara order masih ada.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /** Slot waktu istirahat pengambilan */
    public function breakTime(): BelongsTo
    {
        return $this->belongsTo(BreakTime::class);
    }

    /** Detail item-item dalam pesanan ini */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /** Transaksi saldo yang dipicu pesanan ini */
    public function balanceTransaction(): HasOne
    {
        return $this->hasOne(BalanceTransaction::class);
    }

    /** QR code pengambilan pesanan */
    public function orderQr(): HasOne
    {
        return $this->hasOne(OrderQr::class);
    }

    /**
     * Buat atau perbarui token QR; berlaku 90 menit sejak dibuat.
     */
    public function generateQr(): OrderQr
    {
        return $this->orderQr()->updateOrCreate(
            ['order_id' => $this->id],
            [
                'token' => Str::random(64),
                'expires_at' => now()->addMinutes(90),
                'used_at' => null,
            ]
        );
    }
}
