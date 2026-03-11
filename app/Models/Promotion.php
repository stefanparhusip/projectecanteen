<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use SoftDeletes;

    const TYPE_BUNDLE = 'bundle';

    const TYPE_TIME = 'time';

    const DISCOUNT_PERCENTAGE = 'percentage';

    const DISCOUNT_FIXED = 'fixed';

    protected $fillable = [
        'name',
        'type',
        'params',
        'discount_type',
        'discount_value',
        'priority',
        'stackable',
        'start_at',
        'end_at',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'params' => 'array',
            'discount_value' => 'decimal:2',
            'priority' => 'integer',
            'stackable' => 'boolean',
            'active' => 'boolean',
            'start_at' => 'datetime',
            'end_at' => 'datetime',
        ];
    }

    // ── Scopes ───────────────────────────────────────────────────────────────

    public function scopeActive(Builder $q): Builder
    {
        return $q->where('active', true);
    }

    /**
     * Only promotions whose validity window includes $now.
     * null start_at => open-ended from the beginning.
     * null end_at   => open-ended going forward.
     */
    public function scopeInRange(Builder $q, Carbon $now): Builder
    {
        return $q
            ->where(function ($q) use ($now) {
                $q->whereNull('start_at')->orWhere('start_at', '<=', $now);
            })
            ->where(function ($q) use ($now) {
                $q->whereNull('end_at')->orWhere('end_at', '>=', $now);
            });
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    public function getTypeLabel(): string
    {
        return match ($this->type) {
            self::TYPE_BUNDLE => 'Bundle',
            self::TYPE_TIME => 'Happy Hour',
            default => ucfirst($this->type),
        };
    }

    public function getDiscountLabel(): string
    {
        if ($this->discount_type === self::DISCOUNT_PERCENTAGE) {
            return number_format($this->discount_value, 0).'%';
        }

        return 'Rp '.number_format((float) $this->discount_value, 0, ',', '.');
    }

    public function getStatusLabel(): string
    {
        return $this->active ? 'Aktif' : 'Nonaktif';
    }
}
