<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feature_flags', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();          // machine key, e.g. "new_checkout_ui"
            $table->string('name');                   // human label
            $table->text('description')->nullable();  // why this flag exists

            $table->boolean('is_enabled')->default(false); // global on/off

            // Gradual rollout: 0–100 % of users receive this flag
            $table->unsignedTinyInteger('rollout_percentage')->default(100);

            // A/B testing
            $table->boolean('has_ab_variants')->default(false);
            $table->string('variant_a_label')->default('Control');   // e.g. "Control"
            $table->string('variant_b_label')->default('Treatment'); // e.g. "Treatment"

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feature_flags');
    }
};
