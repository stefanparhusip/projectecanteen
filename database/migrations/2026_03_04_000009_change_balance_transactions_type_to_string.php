<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * SQLite tidak mendukung ALTER COLUMN untuk mengubah enum.
 * Solusi: recreate tabel dengan kolom type sebagai string (VARCHAR 20)
 * sehingga bisa menerima nilai 'topup', 'debit', DAN 'refund'.
 *
 * Data yang sudah ada akan disalin ke tabel baru.
 */
return new class extends Migration
{
    public function up(): void
    {
        // Matikan foreign key enforcement sementara (wajib di SQLite)
        DB::statement('PRAGMA foreign_keys = OFF');

        // 1. Buat tabel baru dengan type sebagai VARCHAR
        Schema::create('balance_transactions_new', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->string('type', 20);      // sebelumnya enum('topup','debit')
            $table->decimal('amount', 10, 2);
            $table->decimal('balance_before', 10, 2);
            $table->decimal('balance_after', 10, 2);
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });

        // 2. Salin semua baris lama ke tabel baru
        DB::statement('INSERT INTO balance_transactions_new
                       SELECT id, user_id, order_id, type, amount,
                              balance_before, balance_after, description,
                              created_at, updated_at
                       FROM balance_transactions');

        // 3. Hapus tabel lama, ganti namanya
        Schema::drop('balance_transactions');
        DB::statement('ALTER TABLE balance_transactions_new RENAME TO balance_transactions');

        // Hidupkan kembali foreign key enforcement
        DB::statement('PRAGMA foreign_keys = ON');
    }

    public function down(): void
    {
        DB::statement('PRAGMA foreign_keys = OFF');

        Schema::create('balance_transactions_new', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->enum('type', ['topup', 'debit']);
            $table->decimal('amount', 10, 2);
            $table->decimal('balance_before', 10, 2);
            $table->decimal('balance_after', 10, 2);
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });

        DB::statement('INSERT INTO balance_transactions_new
                       SELECT id, user_id, order_id, type, amount,
                              balance_before, balance_after, description,
                              created_at, updated_at
                       FROM balance_transactions
                       WHERE type IN (\'topup\', \'debit\')');

        Schema::drop('balance_transactions');
        DB::statement('ALTER TABLE balance_transactions_new RENAME TO balance_transactions');

        DB::statement('PRAGMA foreign_keys = ON');
    }
};
