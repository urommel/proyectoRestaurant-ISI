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
        Schema::table('proveedors', function (Blueprint $table) {
            //
            `idProveedor` int(11) NOT NULL,
            `compañia` varchar(30) NOT NULL,
            `representante` varchar(60) NOT NULL,
            `ruc` char(8) NOT NULL,
            `celular` char(9) NOT NULL,
            `direccion` varchar(60) NOT NULL,
            `email` varchar(100) NOT NULL,
            `estado` varchar(20) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            $table->id();
            $table->string('compañia', 30);
            $table->string('representante', 60);
            $table->string('ruc', 8);
            $table->string('celular', 9);
            $table->string('direccion', 60);
            $table->string('email', 100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proveedors', function (Blueprint $table) {
            //
        });
    }
};
