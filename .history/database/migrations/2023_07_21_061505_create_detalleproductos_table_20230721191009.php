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
        Schema::table('detalleproductos', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('iomanda');
            $table->foreign('idComanda')->references('id')->on('comandas')->onDelete('cascade');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::table('detalleproductos', function (Blueprint $table) {
            //
        });
    }
};
