<?php

namespace App\Jobs;

use App\Models\Menu;
use App\Models\RestockRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Creates a pending RestockRequest for the given menu.
 *
 * The requested_stock is set to menu.default_stock when available,
 * otherwise falls back to 3× the low_stock_threshold.
 *
 * An admin must approve the request before stock is actually updated.
 */
class AutoRestockJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public readonly int $menuId,
        public readonly ?int $stockAlertId = null,
    ) {}

    public function handle(): void
    {
        $menu = Menu::find($this->menuId);

        if (! $menu) {
            return;  // Menu deleted since dispatch
        }

        // Avoid duplicate pending requests for the same menu
        $alreadyPending = RestockRequest::where('menu_id', $menu->id)
            ->where('status', RestockRequest::STATUS_PENDING)
            ->exists();

        if ($alreadyPending) {
            return;
        }

        // default_stock = 0 means "not configured" (column has DEFAULT 0, NOT NULL)
        $requested = $menu->default_stock
            ?: ($menu->low_stock_threshold ? $menu->low_stock_threshold * 3 : 10);

        RestockRequest::create([
            'menu_id' => $menu->id,
            'stock_alert_id' => $this->stockAlertId,
            'requested_stock' => $requested,
            'status' => RestockRequest::STATUS_PENDING,
            'is_auto' => true,
        ]);
    }
}
