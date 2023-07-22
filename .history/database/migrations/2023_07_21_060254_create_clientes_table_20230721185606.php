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
        Schema::table('clientes', function (Blueprint $table) {
            //
            $table->id();
            //$table->string('idTipo', 20);
            $table->unsignedBigInteger('idTipo')
            
            $table->foreignId('idTipo')->constrained('tipos');
            $table->bigInteger('')
            $table->string('documento', 30);
            $table->string('Nombre', 30);
            $table->string('Apellido', 30);
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
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }
};
