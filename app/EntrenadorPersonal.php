<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EntrenadorPersonal extends Model
{ use Notifiable;

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
}
