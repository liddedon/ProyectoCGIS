<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model

{ use  Notifiable;
    //
    protected $fillable = [
        'fechaNacimiento','sexo','altura','peso','haceDeporte','numeroDeHoras','deporteCalle','deporteCasa',
        'quiereDieta','observaciones','problemasMusculares','problemasCardiovasculares','hipertensión',
        'enfermedadesCronicas','embarazada','medicación',

];
    public function User ()
    {
        return $this->hasOne('App\User');
    }

    public function Dieta ()
    {
        return $this->hasMany('App\Dieta');
    }

    public function Entrenamiento ()
    {
        return $this->hasMany('App\Entrenamiento');
    }
}
