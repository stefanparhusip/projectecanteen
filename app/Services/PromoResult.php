<?php

namespace App\Services;

use App\Models\Promotion;
use Illuminate\Support\Collection;

/**
 * Immutable value-object returned by PromoEngine::evaluate().
 */
final class PromoResult
{
    public function __construct(
        public readonly float $discountAmount,  // Rp discount applied
        public readonly Collection $appliedPromos,   // Collection<Promotion>
        public readonly float $rawTotal,        // total before discount
    ) {}

    public function finalTotal(): float
    {
        return max(0.0, $this->rawTotal - $this->discountAmount);
    }

    public function hasDiscount(): bool
    {
        return $this->discountAmount > 0;
    }

    /** Array of applied promotion IDs, suitable for JSON storage. */
    public function appliedIds(): array
    {
        return $this->appliedPromos->pluck('id')->all();
    }

    /** Human-readable summary, e.g. "Diskon Rp 5.000 dari: Bundle Hemat". */
    public function summary(): string
    {
        if (! $this->hasDiscount()) {
            return '';
        }

        $names = $this->appliedPromos->pluck('name')->implode(', ');

        return 'Diskon Rp '.number_format($this->discountAmount, 0, ',', '.')." dari: {$names}";
    }
}
