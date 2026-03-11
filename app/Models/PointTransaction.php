<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PointTransaction extends Model
{
    public const TYPE_EARN = 'earn';

    public const TYPE_REDEEM = 'redeem';

    public const TYPE_ADMIN_ADJUST = 'admin_adjust';

    protected $fillable = [
        'user_id',
        'points',
        'type',
        'ref_type',
        'ref_id',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'points' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
