<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Drop simple unique index if it still exists (it may have been removed by a prior failed run)
        if (Schema::hasColumn('orders', 'idempotency_key')) {
            try {
                DB::statement('DROP INDEX IF EXISTS "orders_idempotency_key_unique"');
            } catch (\Throwable) { /* already gone */
            }
        }
        // Partial composite unique index: same (user_id, key) pair = duplicate; different users can share a key
        DB::statement('CREATE UNIQUE INDEX IF NOT EXISTS orders_user_idem_unique ON orders (user_id, idempotency_key) WHERE idempotency_key IS NOT NULL');
    }

    public function down(): void
    {
        DB::statement('DROP INDEX IF EXISTS orders_user_idem_unique');
    }
};
