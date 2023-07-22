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
            $table->unsignedBigInteger('menus_id');
            $table->foreign('menus_id')->references('id')->on('menus')->onDelete('cascade');
            $table->unsignedBigInteger('idPlato');
            $table->foreign('idPlato')->references('id')->on('platos')->onDelete('cascade');
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
