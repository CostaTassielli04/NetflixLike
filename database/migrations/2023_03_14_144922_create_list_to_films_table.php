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
        Schema::create('list_to_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->references('id')->on('films');
            $table->foreignId('mylist_id')->references('id')->on('mylists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_to_films');
    }
};
