<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Guard: add_promo_fields_to_orders_table already adds this column.
        // This migration is a no-op if the column already exists (e.g. fresh migrations).
        if (! Schema::hasColumn('orders', 'discount_amount')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->decimal('discount_amount', 12, 2)->default(0)->after('total_price');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op: dropColumn is handled by add_promo_fields_to_orders_table down().
    }
};
