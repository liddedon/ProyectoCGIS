<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrenamiento_id');
            $table->string('nombreEjercicio');
            $table->string('foto');
            $table->string('video');
            $table->longText('descripcion');
            $table->string('zona');
            $table->timestamps();
            $table->foreign('entrenamiento_id')->reference('id')->on('entrenamiento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios');
    }
}
