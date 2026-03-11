<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('export_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('type');        // 'transactions', 'orders', 'users'
            $table->string('format')->default('csv'); // 'csv'
            $table->json('filters')->nullable();      // applied filter params
            $table->string('status')->default('pending'); // pending|processing|done|failed
            $table->string('file_path')->nullable();  // storage path once done
            $table->unsignedInteger('row_count')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('export_jobs');
    }
};
