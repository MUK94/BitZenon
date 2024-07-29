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
      Schema::create('podcasts',  function(Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->default(1)->constrained()->cascadeOnDelete();
			$table->string('title');
			$table->string('slug');
			$table->string('audio');
			$table->mediumText('description');
			$table->foreignId('topic_id')->default(1)->constrained()->cascadeOnDelete();
			$table->string('cover_image')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('podcasts');
    }
};
