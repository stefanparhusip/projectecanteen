<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BalanceTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'type',
        'amount',
        'balance_before',
        'balance_after',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'balance_before' => 'decimal:2',
            'balance_after' => 'decimal:2',
        ];
    }

    // ── Type Constants ────────────────────────────────────────────────────────

    const TYPE_TOPUP = 'topup';

    const TYPE_DEBIT = 'debit';

    const TYPE_REFUND = 'refund';   // dikembalikan ke user saat pesanan dibatalkan

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** User pemilik transaksi ini */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /** Pesanan terkait (nullable untuk top-up) */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class)->withTrashed();
    }
}
