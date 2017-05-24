<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjercicioEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicio_entrenamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('entrenamiento_id');
            $table->unsignedInteger('ejercicio_id');
            $table->longText('observaciones');
            $table->integer('numSeries');
            $table->integer('numRepeticiones');
            $table->time('duracion');
            $table->foreign('entrenamiento_id')->references('id')->on('entrenamientos')->onDelete('cascade');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicio_entrenamientos');
    }
}
