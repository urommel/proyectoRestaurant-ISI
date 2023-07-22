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
            $table->bigInteger('idMenu')->unsigned()->on('menus')->onDelete('cascade');
            
            //$table->string('idMenu', 20);
            //$table->string('idPlato', 20);
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
