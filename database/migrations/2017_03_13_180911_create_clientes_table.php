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
            $table->dateTime('fechaNacimiento')->nullable();
            $table->string('sexo')->nullable();
            $table->unsignedInteger('altura')->nullable();
            $table->decimal('peso',4,1)->nullable();
            $table->boolean('haceDeporte');
            $table->integer('numeroDeHoras')->nullable();
            $table->boolean('deporteCalle')->nullable();
            $table->boolean ('deporteCasa')->nullable();
            $table->boolean ('quiereDieta')->nullable();
            $table->longText('observaciones')->nullable();
            $table->boolean('problemasMusculares')->nullable();
            $table->boolean('problemasCardiovasculares')->nullable();
            $table->boolean('hipertensión')->nullable();
            $table->string('enfermedadesCronicas')->nullable();
            $table->boolean('embarazada')->nullable();
            $table->string('medicación')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
