<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('restore_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('backup_id')->constrained('backups')->cascadeOnDelete();
            $table->foreignId('requested_by')->constrained('users');
            // pending | approved | rejected | in_progress | completed | failed
            $table->string('status', 20)->default('pending');
            $table->text('reason')->nullable();
            $table->text('note')->nullable();    // admin notes / command to run
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restore_requests');
    }
};
