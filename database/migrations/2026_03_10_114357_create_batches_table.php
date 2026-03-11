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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('class_name', 100);
            $table->foreignId('break_time_id')->constrained();
            $table->foreignId('created_by_user_id')->constrained('users');
            $table->string('code', 8)->unique();  // 6-char join code
            $table->string('status', 20)->default('open'); // open|locked|checked_out|cancelled
            $table->string('payment_mode', 20)->nullable(); // split|one_pays — set at checkout
            $table->foreignId('payer_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('note', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
