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
        Schema::create('services', function (Blueprint $table) {
					$table->id();
					$table->foreignId('user_id')->default(1)->constrained()->cascadeOnDelete();
					$table->string('title');
					$table->string('slug');
					$table->longText('description');
					$table->mediumText('author_bio');
					$table->integer('price');
					$table->string('address');
					$table->string('phone_number');
					$table->string('cover_image')->nullable();
					$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
