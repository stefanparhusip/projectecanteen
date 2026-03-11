<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            // Stok default harian — dipakai saat reset otomatis tiap pagi
            $table->integer('default_stock')->default(0)->after('stock');
        });

        // Salin nilai stock saat ini sebagai default_stock awal
        DB::table('menus')->whereNull('deleted_at')->update([
            'default_stock' => DB::raw('stock'),
        ]);
    }

    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('default_stock');
        });
    }
};
