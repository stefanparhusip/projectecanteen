<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_feature_flag_overrides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignId('feature_flag_id')
                ->constrained('feature_flags')
                ->cascadeOnDelete();

            // null = use global rollout logic; true/false forces enable/disable
            $table->boolean('is_enabled')->nullable();

            // null = assign automatically; 'A' or 'B' overrides variant assignment
            $table->string('variant', 1)->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'feature_flag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_feature_flag_overrides');
    }
};
