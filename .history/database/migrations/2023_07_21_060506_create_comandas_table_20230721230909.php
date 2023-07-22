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
        // Replace 'id' with the actual primary key column name in the 'mesas' table
        $table->foreign('idMesa')->references('id')->on('mesas')->onDelete('cascade');
        $table->string('dni', 20);
        $table->string('fecha', 20);
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
        Schema::dropIfExists('comandas');
    }
};
