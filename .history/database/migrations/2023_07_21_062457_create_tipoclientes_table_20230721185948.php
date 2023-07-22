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
        Schema::table('tipoclientes', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('mesas_id');
            $table->foreign('idMesa')->references('id')->on('mesas')->onDelete('cascade');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->string('fechaReservacion', 20);
            $table->string('estado', 20);
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
        Schema::table('tipoclientes', function (Blueprint $table) {
            //
        });
    }
};
