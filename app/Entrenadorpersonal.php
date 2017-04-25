<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenadorpersonal extends Model
{ //use Notifiable;

    //
    protected $fillable = [
        'especialidad',

    ];

    public function User ()
    {
        return $this->hasOne('App\User');
    }

    public function Dieta ()
    {
        return $this->hasMany('App\Dieta');
    }

    public function Entrenamiento ()
    {
        return $this->hasMany('App\Entrenamiento');
    }
}
