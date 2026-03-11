<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeatureFlag extends Model
{
    protected $fillable = [
        'key',
        'name',
        'description',
        'is_enabled',
        'rollout_percentage',
        'has_ab_variants',
        'variant_a_label',
        'variant_b_label',
    ];

    protected function casts(): array
    {
        return [
            'is_enabled' => 'boolean',
            'rollout_percentage' => 'integer',
            'has_ab_variants' => 'boolean',
        ];
    }

    // ── Relationships ────────────────────────────────────────────────────────

    public function overrides(): HasMany
    {
        return $this->hasMany(UserFeatureFlagOverride::class);
    }
}
