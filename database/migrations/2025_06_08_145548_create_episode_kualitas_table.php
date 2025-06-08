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
        Schema::create('episode_kualitas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_episode');
            $table->unsignedBigInteger('id_kualitas');
            $table->string('link_stretring');
            $table->string('link_download_gdrive');
            $table->string('link_download_zippy');

            $table->foreign('id_episode')->references('id_episode')->on('episodes')->onDelete('cascade');
            $table->foreign('id_kualitas')->references('id_kualitas')->on('vidio_kualitas')->onDelete('cascade');

            $table->primary(['id_episode','id_kualitas']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episode_kualitas');
    }
};
