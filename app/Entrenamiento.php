<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{

    protected $fillable = [
        'cliente_id','entrenadorpersonal_id','fechaInicio','fechaFin','descripcion',

    ];
    public function entrenadorpersonal()
    {
        return $this->belongsTo('App\Entrenadorpersonal');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function ejercicios()
    {
        return $this->belongsToMany('App\Ejercicios');
    }

    //
}
