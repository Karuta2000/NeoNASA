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
        Schema::create('space_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gps_3d_coordinates');
            $table->string('image_url');
            $table->unsignedBigInteger('galaxy_id');
            $table->foreign('galaxy_id')->references('id')->on('galaxies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('space_stations');
    }
};
