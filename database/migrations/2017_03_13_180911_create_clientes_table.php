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
            $table->integer('edad')->nullable();
            $table->string('sexo')->nullable();
            $table->float('altura')->nullable();
            $table->float('peso')->nullable();
            $table->boolean('haceDeporte')->nullable();
            $table->integer('numeroDeHoras')->nullable();
            $table->boolean('deporteCalle')->nullable();
            $table->boolean ('deporteCasa')->nullable();
            $table->boolean ('quiereDieta')->nullable();
            $table->string('observaciones')->nullable();
            $table->boolean('problemasMusculares')->nullable();
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
