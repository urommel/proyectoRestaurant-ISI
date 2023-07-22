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
        Schema::create('comandas', function (Blueprint $table) {
            //
            $table->id('idComanda');
            $table->unsignedBigInteger('idMesa');
            $table->foreign('idMesa')->references('id')->on('mesas')->onDelete('cascade');
            $table->string('dni');
            $table->string('fecha');
            $table->string('estado');
            $table->timestamps();

            `idComanda` int(11) NOT NULL,
            `idMesa` int(11) DEFAULT NULL,
            `dni` int(11) DEFAULT NULL,
            `fecha` date DEFAULT NULL,
            `estado` varchar(20) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comandas');
    }
};
