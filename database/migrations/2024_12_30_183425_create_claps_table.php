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
        Schema::create('claps', function (Blueprint $table) {
            $table->id();
				$table->integer('claps_count')->default(0);
				$table->foreignId('user_id')->constrained(); // Assuming you're using the 'users' table
				$table->foreignId('article_id')->constrained('articles'); // Foreign key to 'articles' table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claps');
    }
};
