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
        Schema::table('tipomenus', function (Blueprint $table) {
            //
            `idTipoMenu` int(11) NOT NULL,
            `tipo` varchar(20) DEFAULT NULL,
            `descripcion` varchar(30) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL

            $table->id();
            $table->string('idTipoMenu', 20);
            $table->string('tipo', 20);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipomenus', function (Blueprint $table) {
            //
        });
    }
};
