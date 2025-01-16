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
        Schema::create('jadwal_pelatihan', function (Blueprint $table) {
            $table->increments('pelatihan_id');
            $table->time('jam');
            $table->string('hari', 20);
            $table->string('lokasi', 50);
            $table->unsignedInteger('materi_id');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('materi_id')->references('materi_id')->on('materi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelatihan');
    }
};