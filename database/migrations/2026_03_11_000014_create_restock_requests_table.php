<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('restock_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->cascadeOnDelete();
            $table->foreignId('stock_alert_id')->nullable()->constrained('stock_alerts')->nullOnDelete();
            $table->unsignedInteger('requested_stock');
            $table->string('status', 20)->default('pending');  // pending | approved | rejected
            $table->boolean('is_auto')->default(false);        // true = triggered automatically
            $table->foreignId('requested_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->text('notes')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();

            $table->index(['menu_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restock_requests');
    }
};
