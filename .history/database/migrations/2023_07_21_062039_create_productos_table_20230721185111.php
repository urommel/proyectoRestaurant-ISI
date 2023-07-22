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
        Schema::table('productos', function (Blueprint $table) {
            //
            $table->id();
            $table->string('nombre', 30);
            $table->string('descripcion', 30);
            $table->string('medida', 20);
            $table->string('stock', 20);
            $table->bigInteger('idTipo')->unsigned()->on('tipoproductos')->onDelete('cascade');
            
            $table->string('precio', 20);
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
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
};
