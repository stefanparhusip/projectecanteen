<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $driver = DB::connection()->getDriverName();

        if ($driver === 'mysql' || $driver === 'mariadb') {
            DB::statement(
                "ALTER TABLE orders MODIFY COLUMN status
                 ENUM('pending','preparing','ready','cancelled','collected')
                 NOT NULL DEFAULT 'pending'"
            );
        } else {
            // SQLite: change() triggers a full table rebuild in Laravel 11
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('status', ['pending', 'preparing', 'ready', 'cancelled', 'collected'])
                    ->default('pending')
                    ->change();
            });
        }
    }

    public function down(): void
    {
        $driver = DB::connection()->getDriverName();

        if ($driver === 'mysql' || $driver === 'mariadb') {
            DB::statement(
                "ALTER TABLE orders MODIFY COLUMN status
                 ENUM('pending','preparing','ready','cancelled')
                 NOT NULL DEFAULT 'pending'"
            );
        } else {
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('status', ['pending', 'preparing', 'ready', 'cancelled'])
                    ->default('pending')
                    ->change();
            });
        }
    }
};
