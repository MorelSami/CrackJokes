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
        Schema::create('jokes', function (Blueprint $table) {
            $table->uuid('jokeId');
            $table->longText('joke')->nullable($value = false);
            $table->integer('total_rate_value')->default(0);
            $table->integer('num_of_ratings')->default(0);
            $table->decimal('AvgRating', $precision = 8, $scale = 2)->default(0.0);
            $table->dateTime('updated_at')->nullable()->useCurrentOnUpdate();
            $table->dateTime('created_at')->useCurrent();
            $table->primary('jokeId');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->comment('Jokes table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jokes');
    }
};
