<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BatchMemberItem extends Model
{
    protected $fillable = [
        'batch_member_id',
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

    public function batchMember(): BelongsTo
    {
        return $this->belongsTo(BatchMember::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
