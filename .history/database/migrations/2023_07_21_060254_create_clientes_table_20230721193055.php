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
        Schema::create('clientes', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->string('documento', 30);
            $table->string('Nombre', 30);
            $table->string('Apellido', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
