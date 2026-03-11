<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PromoApplication extends Model
{
    protected $fillable = [
        'order_id',
        'promotion_id',
        'discount_amount',
        'snapshot',
    ];

    protected function casts(): array
    {
        return [
            'discount_amount' => 'decimal:2',
            'snapshot' => 'array',
        ];
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }
}
