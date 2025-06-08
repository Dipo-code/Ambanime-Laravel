<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anime_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('id_anime');
            $table->unsignedBigInteger('id_genre');

            $table->foreign('id_anime')->references('id_anime')->on('animes')->onDelete('cascade');
            $table->foreign('id_genre')->references('id_genre')->on('genres')->onDelete('cascade');
       
            $table->primary(['id_anime','id_genre']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_genres');
    }
};
