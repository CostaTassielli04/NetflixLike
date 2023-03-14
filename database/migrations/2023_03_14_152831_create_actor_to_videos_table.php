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
        Schema::create('actor_to_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->references('id')->on('actors');
            $table->foreignId('video_id')->references('id')->on('videos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_to_videos');
    }
};
