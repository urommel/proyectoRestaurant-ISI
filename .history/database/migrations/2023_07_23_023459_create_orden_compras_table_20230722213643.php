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
            $table->id();
            'idProveedor','idOrden','fecha','estado','descripcion','personal_id','precioTotal','observacion'
            $table->string('idProveedor');
            
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
