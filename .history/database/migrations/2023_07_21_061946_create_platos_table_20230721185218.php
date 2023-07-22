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
            $table->id();
            $table->string('nombre', 30);
            $table->string('precio', 20);
            $table->string('idCategoria', 20);
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
        Schema::table('platos', function (Blueprint $table) {
            //
        });
    }
};
