<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busquedas', function (Blueprint $table) {
            $table->id('idBusqueda');
            $table->unsignedBigInteger('idRubro');
            $table->text('empresa');
            $table->text('titulo');
            $table->text('descripcion');
            $table->timestamps();
            $table->foreign('idRubro')->references('idRubro')->on('Rubros'); //clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('busquedas');
    }
}
