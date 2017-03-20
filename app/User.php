<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *public function id()
     *      return $this->hasOne('App\EntrenadorPersonal');
     *public function id()
     *      return $this->hasOne('App\ClienteController');
     *
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos','email', 'password','idUsuario',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
