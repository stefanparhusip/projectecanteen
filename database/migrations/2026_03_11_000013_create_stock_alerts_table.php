<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->cascadeOnDelete();
            $table->unsignedInteger('stock_at_alert');
            $table->unsignedInteger('threshold');
            $table->boolean('auto_restock_triggered')->default(false);
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();

            // Only one unresolved alert per menu at a time is enforced in application logic
            $table->index('menu_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_alerts');
    }
};
