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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            // 'bundle' = item combo discount, 'time' = happy-hour time-based discount
            $table->enum('type', ['bundle', 'time']);
            // JSON: bundle → {menu_ids:[], min_items:2}
            //       time   → {days:[0..6], start_time:"HH:MM", end_time:"HH:MM"}
            $table->json('params')->nullable();
            $table->enum('discount_type', ['percentage', 'fixed'])->default('percentage');
            $table->decimal('discount_value', 8, 2)->default(0);   // % or Rp amount
            $table->unsignedSmallInteger('priority')->default(0);   // higher = evaluated first
            $table->boolean('stackable')->default(false);            // stack with other promos?
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
