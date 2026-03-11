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
        Schema::create('batch_member_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_member_id')->constrained()->cascadeOnDelete();
            $table->foreignId('menu_id')->constrained();
            $table->string('menu_name', 150);
            $table->decimal('menu_price', 12, 2);
            $table->unsignedSmallInteger('quantity');
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batch_member_items');
    }
};
