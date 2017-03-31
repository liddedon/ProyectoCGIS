<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreDieta');
            $table->string('descripcion');
            $table->integer('cliente_id');
            $table->integer('entrenadorPersonal_id');
            $table->timestamps();
            $table->foreign('cliente_id')->reference('id')->on('cliente')->onDelete('cascade');
            $table->foreign('entrenadorPersonal_id')->reference('id')->on('entrenadorPersonal')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietas');
    }
}
