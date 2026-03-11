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
        Schema::create('point_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('points');                          // positif = earn, negatif = redeem
            $table->string('type', 20);                        // earn | redeem | admin_adjust
            $table->string('ref_type', 50)->nullable();        // e.g. App\Models\Order
            $table->unsignedBigInteger('ref_id')->nullable();  // foreign ID (nullable morph-like)
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('point_transactions');
    }
};
