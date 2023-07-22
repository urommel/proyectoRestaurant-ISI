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
        Schema::table('detallecomandas', function (Blueprint $table) {
            //
            $table->id();
            //$table->string('idComanda', 20);
            //$table->string('idPlato', 20);
            
  `precio` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
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
        Schema::table('detallecomandas', function (Blueprint $table) {
            //
        });
    }
};
