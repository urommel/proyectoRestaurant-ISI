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
            $table->unsignedBigInteger('mesas_id');
            $table->foreign('mesas_id')->references('id')->on('mesas')->onDelete('cascade');
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
