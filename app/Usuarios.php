<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos','email', 'password','idUsuario',
    ];

    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table){
           $table->increments ('idUsuario');
           $table->string ('nombre');
           $table->string ('apellidos');
           $table->string ('email');
           $table->string ('password');


        });


    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
