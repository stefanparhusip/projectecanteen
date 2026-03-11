<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anomaly extends Model
{
    protected $fillable = [
        'type',
        'window',
        'detected_at',
        'observed_value',
        'baseline_mean',
        'baseline_stddev',
        'sigma',
        'resolved',
        'resolved_at',
        'context',
    ];

    protected function casts(): array
    {
        return [
            'detected_at' => 'datetime',
            'resolved_at' => 'datetime',
            'baseline_mean' => 'decimal:2',
            'baseline_stddev' => 'decimal:2',
            'sigma' => 'decimal:2',
            'resolved' => 'boolean',
            'context' => 'array',
        ];
    }

    // ── Type constants ────────────────────────────────────────────────────────

    const TYPE_ORDER_SPIKE = 'order_spike';

    const TYPE_REFUND_SPIKE = 'refund_spike';

    const TYPE_TOPUP_SPIKE = 'topup_spike';

    // ── Scopes ────────────────────────────────────────────────────────────────

    public function scopeUnresolved($query)
    {
        return $query->where('resolved', false);
    }

    public function scopeRecent($query, int $days = 7)
    {
        return $query->where('detected_at', '>=', now()->subDays($days));
    }
}
