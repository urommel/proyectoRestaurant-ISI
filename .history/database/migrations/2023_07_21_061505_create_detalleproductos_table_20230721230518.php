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
        Schema::create('detalleproductos', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('idComanda');
            $table->foreign('idComanda')->references('id')->on('comandas')->onDelete('cascade');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('id')->on('productos')->onDelete('cascade');
            $table->string('precio', 20);
            $table->string('cantidad', 20);
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
        Schema::dropIfExists('detalleproductos');
    }
};
