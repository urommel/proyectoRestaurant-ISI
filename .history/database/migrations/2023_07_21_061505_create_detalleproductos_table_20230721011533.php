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
            `idComanda` int(11) NOT NULL,
            `idProducto` int(11) NOT NULL,
            `precio` float DEFAULT NULL,
            `cantidad` int(11) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            $table->string('idComanda', 20);
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
