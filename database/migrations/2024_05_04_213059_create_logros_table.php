<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogrosTable extends Migration
{
    public function up()
    {
        Schema::create('logros', function (Blueprint $table) {
            $table->id('ID_Logro');
            $table->unsignedBigInteger('ID_Usuario');
            $table->unsignedBigInteger('ID_Actividad');
            $table->date('Fecha_Logro');
            $table->foreign('ID_Usuario')->references('ID_Usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('ID_Actividad')->references('ID_Actividad')->on('actividades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('logros');
    }
}