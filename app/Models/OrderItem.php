<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
        'menu_name',
        'menu_price',
        'quantity',
        'subtotal',
    ];

    protected function casts(): array
    {
        return [
            'menu_price' => 'decimal:2',
            'subtotal' => 'decimal:2',
        ];
    }

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** Pesanan induk dari item ini */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Menu yang dipesan.
     * Gunakan withTrashed() karena menu bisa di-soft-delete
     * namun order item tetap harus mereferensikannya.
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class)->withTrashed();
    }
}
