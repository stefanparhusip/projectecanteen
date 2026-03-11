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
            $table->integer('stock')->default(0)->after('price');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('is_available');
        });

        // Beri stok default 10 untuk semua menu yang sudah ada (agar tidak langsung "Habis")
        DB::table('menus')->whereNull('deleted_at')->update(['stock' => 10]);
    }

    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->boolean('is_available')->default(true)->after('price');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('stock');
        });

        DB::table('menus')->update(['is_available' => true]);
    }
};
