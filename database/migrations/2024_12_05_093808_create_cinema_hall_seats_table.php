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
        Schema::create('cinema_hall_seats', function (Blueprint $table) {
            $table->id();
            $table->integer('row');
            $table->integer('column');
            $table->unsignedInteger('cinema_hall_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cinema_hall_id')->references('id')->on('cinema_halls')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema_hall_seats');
    }
};
