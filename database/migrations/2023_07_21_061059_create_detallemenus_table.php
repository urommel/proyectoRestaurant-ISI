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
        Schema::create('detallemenus', function (Blueprint $table) {
            //
            $table->id('idDetalleMenu');
            $table->unsignedBigInteger('idMenu');
            $table->foreign('idMenu')->references('idMenu')->on('menus')->onDelete('cascade');
            $table->unsignedBigInteger('idPlato');
            $table->foreign('idPlato')->references('idPlato')->on('platos')->onDelete('cascade');
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
        Schema::dropIfExists('detallemenus');
    }
};
