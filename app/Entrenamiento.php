<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{

    protected $fillable = [
        'cliente_id','entrenadorPersonal_id','fechaInicio','fechaFin','descripcion',

    ];
    public function EntrenadorPersonal()
    {
        return $this->belongsTo('App\EntrenadorPersonal');
    }
    public function Cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function Ejercicios()
    {
        return $this->belongsToMany('App\Ejercicios');
    }

    //
}
