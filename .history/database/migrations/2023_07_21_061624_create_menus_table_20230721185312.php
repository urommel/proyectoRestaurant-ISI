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
        Schema::table('menus', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('idMenu');
            $table->foreign('idMenu')->references('id')->on('menus')->onDelete('cascade');
            $table->string('fecha', 20);
            $table->string('estado', 20);
            $table->string('idTipoMenu', 20);
            $table->
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
        Schema::table('menus', function (Blueprint $table) {
            //
        });
    }
};
