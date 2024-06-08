<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionesTable extends Migration
{
    public function up()
    {
        Schema::create('lecciones', function (Blueprint $table) {
            $table->id('idLeccion');
            $table->string('nombreLeccion');
            $table->text('descripcion');
            $table->unsignedBigInteger('nivel');
            $table->timestamps();

            $table->foreign('nivel')->references('idNivel')->on('niveles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecciones');
    }
}
