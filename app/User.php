<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function cliente ()
    {
        return $this->hasOne('App\Cliente');
    }

    public function entrenadorpersonal()
    {
        return $this->hasOne('App\Entrenadorpersonal');
    }

    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getFullnameAttribute(){
        return $this->name.' '.$this->surname;
    }
}
