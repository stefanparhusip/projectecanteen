<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    protected $fillable = [
        'name',
        'url',
        'secret',
        'events',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'events' => 'array',
            'is_active' => 'boolean',
        ];
    }

    // ── Supported event names ────────────────────────────────────────────────

    const EVENT_ORDER_CREATED = 'order_created';

    const EVENT_ORDER_READY = 'order_ready';

    const EVENT_TOPUP_APPROVED = 'topup_approved';

    const ALL_EVENTS = [
        self::EVENT_ORDER_CREATED => 'Pesanan Dibuat',
        self::EVENT_ORDER_READY => 'Pesanan Siap Diambil',
        self::EVENT_TOPUP_APPROVED => 'Top-Up Disetujui',
    ];

    // ── Scopes ───────────────────────────────────────────────────────────────

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /** Return only webhooks subscribed to the given event name */
    public function scopeSubscribedTo(Builder $query, string $event): Builder
    {
        return $query->whereJsonContains('events', $event);
    }
}
