<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('break_times', function (Blueprint $table) {
            $table->id();
            $table->string('label', 50);       // Contoh: "Istirahat 1"
            $table->time('start_time');         // Jam mulai istirahat
            $table->time('end_time');           // Jam selesai istirahat
            $table->time('order_deadline');     // Batas pre-order sebelum istirahat
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('break_times');
    }
};
