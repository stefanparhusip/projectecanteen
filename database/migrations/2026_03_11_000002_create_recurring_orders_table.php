<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recurring_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('qty')->default(1);
            $table->tinyInteger('day_of_week'); // 0=Minggu … 6=Sabtu (date('w'))
            $table->foreignId('break_time_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_run_at')->nullable();
            $table->timestamps();

            // Satu user tidak boleh punya dua jadwal yang sama persis
            $table->unique(['user_id', 'menu_id', 'day_of_week', 'break_time_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recurring_orders');
    }
};
