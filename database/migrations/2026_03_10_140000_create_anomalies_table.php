<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anomalies', function (Blueprint $table) {
            $table->id();

            // What kind of anomaly: 'order_spike', 'refund_spike', 'topup_spike', etc.
            $table->string('type', 50);

            // The window that was analysed: 'hourly', 'daily'
            $table->string('window', 20)->default('hourly');

            // The timestamp that describes the centre of the detected window
            $table->timestamp('detected_at');

            // The raw observed value (e.g. number of orders in the hour)
            $table->unsignedInteger('observed_value');

            // The computed mean and std-dev baseline used to flag this anomaly
            $table->decimal('baseline_mean', 10, 2);
            $table->decimal('baseline_stddev', 10, 2);

            // How many sigma above the mean this observation sits
            $table->decimal('sigma', 6, 2);

            // Whether admin has acknowledged / resolved this flag
            $table->boolean('resolved')->default(false);
            $table->timestamp('resolved_at')->nullable();

            // Extra context (e.g. top offending user IDs, counts per break_time)
            $table->json('context')->nullable();

            $table->timestamps();

            $table->index(['type', 'detected_at']);
            $table->index('resolved');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anomalies');
    }
};
