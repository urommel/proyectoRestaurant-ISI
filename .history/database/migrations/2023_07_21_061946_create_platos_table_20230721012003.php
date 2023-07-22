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
        Schema::table('platos', function (Blueprint $table) {
            //
            `idPlato` int(11) NOT NULL,
            `nombre` varchar(30) DEFAULT NULL,
            `precio` float DEFAULT NULL,
            `idCategoria` int(11) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            $table->id();
            $table->string('nombre', 30);
            $table->string('precio', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('platos', function (Blueprint $table) {
            //
        });
    }
};
