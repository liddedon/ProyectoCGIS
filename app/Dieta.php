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

    public function cliente ()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function entrenadorpersonal ()
    {
        return $this->belongsTo('App\Entrenadorpersonal');
    }
}
