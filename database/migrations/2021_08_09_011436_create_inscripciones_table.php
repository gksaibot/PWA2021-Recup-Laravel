<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id('idInscripcion');
            $table->unsignedBigInteger('idBusqueda');
            $table->date('fecha');
            $table->text('apellido');
            $table->text('nombre');
            $table->timestamps();
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busquedas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
