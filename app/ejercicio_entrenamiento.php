<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ejercicio_entrenamiento extends Model
{
     protected $fillable = [
'fechaPrevista','observaciones','numSeries','numRepeticiones','numSeriesCompletadas','numRepeticionesCompletadas','duracion',

];

}
