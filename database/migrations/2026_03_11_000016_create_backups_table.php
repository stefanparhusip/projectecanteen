<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('backups', function (Blueprint $table) {
            $table->id();
            $table->string('driver', 20)->default('sqlite'); // sqlite | mysql
            $table->string('filename');
            $table->string('disk_path');
            $table->unsignedBigInteger('size_bytes')->default(0);
            $table->string('checksum', 64)->nullable(); // SHA-256 of raw dump
            $table->unsignedTinyInteger('retention_days')->default(30); // 14 | 30 | 90
            $table->string('status', 20)->default('pending'); // pending|completed|failed
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('backups');
    }
};
