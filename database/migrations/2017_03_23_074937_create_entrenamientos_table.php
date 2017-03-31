<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('entrenadorPersonal_id');
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->string('descripcion');
            $table->timestamps();
            $table->foreign('nombreEntrenadorPersonal_id')->reference('id')->on('entrenadorPersonal')->onDelete('cascade');
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
        Schema::dropIfExists('entrenamientos');
    }
}
