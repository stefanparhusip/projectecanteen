<?php

namespace App\Console\Commands;

use App\Services\StockAlertService;
use Illuminate\Console\Command;

/**
 * Scans every menu that has a low_stock_threshold set and fires alerts
 * for those in a low-stock condition.
 *
 * Usage:
 *   php artisan stock:check-alerts           # normal run
 *   php artisan stock:check-alerts --dry-run # counts without persisting
 */
class CheckLowStock extends Command
{
    protected $signature = 'stock:check-alerts
                            {--dry-run : Count affected menus without creating alerts}';

    protected $description = 'Check menu stock levels and fire low-stock alerts';

    public function handle(StockAlertService $service): int
    {
        $dryRun = (bool) $this->option('dry-run');

        $count = $service->checkAll($dryRun);

        $verb = $dryRun ? 'would create' : 'created';
        $this->info("Stock check completed — {$verb} {$count} new alert(s).");

        return Command::SUCCESS;
    }
}
