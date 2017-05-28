<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicios extends Model
{ protected $fillable = [
    'nombreejercicio','foto','video','descripcion','zona','entrenamiento_id','numSeries','numRepeticiones',
    'duracion','observaciones'

];

    public function entrenamiento()
    {
        return $this->belongsToMany('App\Entrenamiento');
    }
    //
}
