<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockAlert extends Model
{
    protected $fillable = [
        'menu_id',
        'stock_at_alert',
        'threshold',
        'auto_restock_triggered',
        'resolved_at',
    ];

    protected function casts(): array
    {
        return [
            'auto_restock_triggered' => 'boolean',
            'resolved_at' => 'datetime',
        ];
    }

    // ── Helpers ───────────────────────────────────────────────────────────────

    public function isResolved(): bool
    {
        return $this->resolved_at !== null;
    }

    // ── Relations ─────────────────────────────────────────────────────────────

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function restockRequests(): HasMany
    {
        return $this->hasMany(RestockRequest::class);
    }
}
