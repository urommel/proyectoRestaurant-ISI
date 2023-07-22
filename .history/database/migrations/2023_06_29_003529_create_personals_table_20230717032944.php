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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('DNI')->unique();//DNI
            $table->string('apellidos');//apellidos
            $table->string('direccion');//direccion
            $table->string('telefono');//telefono
            $table->string('ciudad');//ciudad
            $table->string('genero');//genero
            $table->date('fnacimiento'); //fecha de nacimiento
            $table->string('foto'); //foto
            $table->unsignedBigInteger('user_id');//id del usuario
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //relacion con la tabla users
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
        Schema::dropIfExists('personals');
    }
};
