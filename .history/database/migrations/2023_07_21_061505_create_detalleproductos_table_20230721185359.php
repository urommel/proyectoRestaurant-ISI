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
            $table->string('idComanda', 20);
            $table->
            $table->string('idProducto', 20);
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
