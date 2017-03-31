<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicios extends Model
{ protected $fillable = [
    'nombreEjercicio','foto','video','descripcion','zona','entrenamiento_id',

];

    public function Entrenamiento()
    {
        return $this->belongsToMany('App\Entrenamiento');
    }
    //
}
