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
        Schema::create('ratings', function (Blueprint $table) {
            $table->integer('ratingId',false, false);
            $table->foreignUuid('jokeId')->constrained(
                table: 'jokes',
                column: 'jokeId', 
                indexName: 'rating_joke_id'
            );
            $table->foreignId('userId')->constrained(
                table: 'users', 
                column: 'userId', 
                indexName: 'rating_user_id'
            );
            $table->integer('rating')->default(0)->comment('Joke rating');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->unique();
            $table->primary([
                'ratingId', 
                'jokeId', 
                'userId'
            ]);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->comment('Jokes rating');
        });
        DB::statement('ALTER TABLE ratings MODIFY `ratingid` INTEGER NOT NULL AUTO_INCREMENT');
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
