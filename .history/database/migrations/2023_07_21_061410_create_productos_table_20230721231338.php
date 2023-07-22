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
        Schema::create('productos', function (Blueprint $table) {
            //
            $table->id('idproducto');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('medida');
            $table->string('stock');
            $table->unsignedBigInteger('idTipo');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->string('precio');
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
        Schema::dropIfExists('productos');
    }
};
