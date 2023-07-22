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
            $table->unsignedBigInteger()
            //$table->string('idPlato', 20);
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
        Schema::table('detallecomandas', function (Blueprint $table) {
            //
        });
    }
};
