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
        Schema::create('ordenCompras', function (Blueprint $table) {
            $table->id('idOrden');
            'fecha','estado','descripcion','personal_id','precioTotal','observacion'
            $table->string('idProveedor');
            $table->string('estado');
            $table->string('descripcion');
            $table->string('personal_id');
            $table->string('precioTotal');
            $table->string('observacion');

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
        Schema::dropIfExists('ordenCompras');
    }
};
