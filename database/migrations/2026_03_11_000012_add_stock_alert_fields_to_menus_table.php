<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Adds low-stock alerting fields to the menus table:
 *  - default_stock       — target level for auto-restock (was already in Model fillable; added here)
 *  - low_stock_threshold — alert fires when stock <= this value (null = no alert)
 *  - auto_restock_enabled — whether to auto-create a RestockRequest when threshold is hit
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            // default_stock was already added by migration 2026_03_10_105334
            if (! Schema::hasColumn('menus', 'low_stock_threshold')) {
                $table->unsignedSmallInteger('low_stock_threshold')->nullable()->after('default_stock');
            }
            if (! Schema::hasColumn('menus', 'auto_restock_enabled')) {
                $table->boolean('auto_restock_enabled')->default(false)->after('low_stock_threshold');
            }
        });
    }

    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $cols = array_filter(
                ['low_stock_threshold', 'auto_restock_enabled'],
                fn ($c) => Schema::hasColumn('menus', $c)
            );
            if ($cols) {
                $table->dropColumn(array_values($cols));
            }
        });
    }
};
