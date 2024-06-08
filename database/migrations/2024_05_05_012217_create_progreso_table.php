<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresoTable extends Migration
{
    public function up()
    {
        Schema::create('progreso', function (Blueprint $table) {
            $table->bigIncrements('idProgreso');
            $table->unsignedBigInteger('ID_Usuario');
            $table->unsignedBigInteger('idLeccion');
            $table->integer('puntuacion');
            $table->date('fechaCompletada');
            $table->timestamps();

            $table->foreign('ID_Usuario')->references('ID_Usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('idLeccion')->references('idLeccion')->on('lecciones')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('progreso');
    }
}