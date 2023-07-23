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
        Schema::create('detalleOrdenCompras', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('idOrden');
            $table->foreign('idOrden')->references('idOrden')->on('ordenCompras');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            
            'cantidad','idOrden','idproducto','precio'
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
        Schema::dropIfExists('detalleOrdenCompras');
    }
};
