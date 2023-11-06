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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('commentId')->autoIncrement();
            $table->foreignId('userId')->constrained(
                table: 'users', 
                indexName: 'comment_user_id'
            );
            $table->foreignUuid('jokeId')->constrained(
                table: 'jokes', 
                indexName: 'comment_joke_id'
            );
            $table->longText('comment')->nullable($value = false);
            $table->dateTime('updated_at')->nullable()->useCurrentOnUpdate();
            $table->dateTime('created_at')->useCurrent();
            $table->primary('commentId');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->comment('Comments table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
