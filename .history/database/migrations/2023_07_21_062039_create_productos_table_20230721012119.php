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
        Schema::table('productos', function (Blueprint $table) {
            //
            `idproducto` int(11) NOT NULL,
            `nombre` varchar(30) DEFAULT NULL,
            `descripcion` varchar(30) DEFAULT NULL,
            `medida` varchar(20) DEFAULT NULL,
            `stock` int(11) DEFAULT NULL,
            `idTipo` int(11) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `precio` float NOT NULL
            $table->id();
            $table->string('nombre', 30);
            $table->string('descripcion', 30);
            $table->string('medida', 20);
            $table->string('stock', 20);
            $table->string('idTipo', 20);
            $table->string('precio', 20);
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
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
};
