<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use Notifiable;

    //
    protected $fillable = [
       'nombreDieta','descripcion','cliente_id','entrenadorPersonal_id',
    //,

    ];

    public function Cliente ()
    {
        return $this->hasOne('App\Cliente');
    }

    public function EntrenadorPersonal ()
    {
        return $this->belongsTo('App\EntrenadorPersonal');
    }
}
