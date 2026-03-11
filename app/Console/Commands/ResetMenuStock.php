<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ResetMenuStock extends Command
{
    protected $signature = 'menu:reset-stock';

    protected $description = 'Reset stok semua menu ke nilai default_stock harian';

    public function handle(): int
    {
        $affected = DB::table('menus')
            ->whereNull('deleted_at')
            ->update(['stock' => DB::raw('default_stock')]);

        $this->info("✓ Stok direset: {$affected} menu diperbarui ke stok default.");
        Log::info("menu:reset-stock — {$affected} menu direset ke default_stock.", [
            'ran_at' => now()->toDateTimeString(),
        ]);

        return self::SUCCESS;
    }
}
