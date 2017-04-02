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
        Schema::create('ejercicio_entrenamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('entrenamiento_id');
            $table->integer('ejercicio_id');
            $table->longText('observaciones');
            $table->integer('numSeries');
            $table->integer('numSeriesCompletadas');
            $table->integer('numRepeticiones');
            $table->integer('numRepeticionesCompletadas');
            $table->time('duracion');
            $table->foreign('entrenamiento_id')->references('id')->on('entrenamiento')->onDelete('cascade');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicio')->onDelete('cascade');
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
