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
        Schema::create('ordenCompras', function (Blueprint $table) {
            $table->id('idOrden');
            $table->string('fecha');
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idProveedor')->references('idProveedor')->on('proveedors');
            $table->string('estado');
            $table->string('descripcion');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personals');
            $table->string('precioTotal');
            // $table->string('observacion')->nullable();
            // la observacion si puede ser nula
            $table->string('observacion');
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
        Schema::dropIfExists('ordenCompras');
    }
};
