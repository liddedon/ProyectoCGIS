<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{

    //
    protected $fillable = [
       'nombreDieta','descripcion','cliente_id','entrenadorpersonal_id',
    //,

    ];

    public function Cliente ()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function Entrenadorpersonal ()
    {
        return $this->belongsTo('App\Entrenadorpersonal');
    }
}
