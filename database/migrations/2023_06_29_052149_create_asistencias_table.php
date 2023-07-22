<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('minutos')->nullable();
            $table->string('justificacion')->nullable();
            $table->string('dia')->nullable();
            $table->string('fecha')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
};
