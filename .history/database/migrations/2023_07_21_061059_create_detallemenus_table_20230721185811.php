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
        Schema::table('detallemenus', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('menus');
            $table->foreign('idMenu')->references('id')->on('menus')->onDelete('cascade');
            $table->unsignedBigInteger('platos_id');
            $table->foreign('platos_id')->references('id')->on('platos')->onDelete('cascade');
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
        Schema::table('detallemenus', function (Blueprint $table) {
            //
        });
    }
};
