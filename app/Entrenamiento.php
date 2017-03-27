<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{

    protected $fillable = [
        'nombreCliente','nombreEntrenadorPersonal','fecha','descripcion',

    ];
    public function EntrenadorPersonal()
    {
        return $this->belongsTo('App\EntrenadorPersonal');
    }
    public function Cliente()
    {
        return $this->belongsToMany('App\Cliente');
    }



    //
}
