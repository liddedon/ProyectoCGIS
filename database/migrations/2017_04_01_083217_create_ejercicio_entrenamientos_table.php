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
            $table->string('observaciones');
            $table->integer('numSeries');
            $table->integer('numSeriesCompletadas');
            $table->integer('numRepeticiones');
            $table->integer('numRepeticionesCompletadas');
            $table->time('duracion');
            $table->foreign('entrenadorPersonal_id')->reference('id')->on('entrenadorPersonal')->onDelete('cascade');
            $table->foreign('cliente_id')->reference('id')->on('cliente')->onDelete('cascade');
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
