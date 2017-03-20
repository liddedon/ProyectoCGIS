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

}
