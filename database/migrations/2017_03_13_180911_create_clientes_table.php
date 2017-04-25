<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fechaNacimiento');
            $table->string('sexo');
            $table->numeric('altura');
            $table->numeric('peso');
            $table->boolean('haceDeporte');
            $table->integer('numeroDeHoras');
            $table->boolean('deporteCalle');
            $table->boolean ('deporteCasa');
            $table->boolean ('quiereDieta');
            $table->longText('observaciones');
            $table->boolean('problemasMusculares');
            $table->boolean('problemasCardiovasculares');
            $table->boolean('hipertensión');
            $table->string('enfermedadesCronicas');
            $table->boolean('embarazada');
            $table->string('medicación');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
