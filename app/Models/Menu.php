<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'stock',
        'default_stock',
        'low_stock_threshold',
        'auto_restock_enabled',
        'image_url',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'stock' => 'integer',
            'default_stock' => 'integer',
            'low_stock_threshold' => 'integer',
            'auto_restock_enabled' => 'boolean',
        ];
    }

    // ── Accessors ────────────────────────────────────────────────────────────

    /**
     * Accessor: $menu->is_available
     * Digunakan di view/query warisan — true jika stock > 0.
     */
    public function getIsAvailableAttribute(): bool
    {
        return $this->stock > 0;
    }

    /**
     * Accessor: $menu->status  → "Tersedia" | "Habis"
     */
    public function getStatusAttribute(): string
    {
        return $this->stock > 0 ? 'Tersedia' : 'Habis';
    }

    /**
     * Kembalikan true jika menu masih memiliki stok tersisa.
     */
    public function isAvailable(): bool
    {
        return $this->stock > 0;
    }

    /**
     * True if stock is at or below the configured low-stock threshold.
     */
    public function isLowStock(): bool
    {
        return $this->low_stock_threshold !== null
            && $this->stock <= $this->low_stock_threshold;
    }

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** Kategori dari menu ini */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /** Item pesanan yang memuat menu ini */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /** Semua alert stok rendah untuk menu ini */
    public function stockAlerts(): HasMany
    {
        return $this->hasMany(StockAlert::class);
    }

    /** Semua permintaan restock untuk menu ini */
    public function restockRequests(): HasMany
    {
        return $this->hasMany(RestockRequest::class);
    }
}
