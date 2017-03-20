<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function Cliente ()
    {
        return $this->hasOne('App\Cliente');
    }

    public function EntrenadorPersonal()
    {
        return $this->hasOne('App\EntrenadorPersonal');
    }

    /**
     * The attributes that are mass assignable.
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
