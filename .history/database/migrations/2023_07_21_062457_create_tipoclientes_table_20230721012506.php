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
        Schema::table('tipoclientes', function (Blueprint $table) {
            //
            `id` int(11) NOT NULL,
            `idCliente` int(11) NOT NULL,
            `idMesa` int(11) NOT NULL,
            `fechaReservacion` date DEFAULT NULL,
            `estado` varchar(15) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipoclientes', function (Blueprint $table) {
            //
        });
    }
};
