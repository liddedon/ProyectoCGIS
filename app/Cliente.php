<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model

{
    //
    protected $fillable = [
        'fechaNacimiento','sexo','altura','peso','haceDeporte','numeroDeHoras','deporteCalle','deporteCasa',
        'quiereDieta','observaciones','problemasMusculares','problemasCardiovasculares','hipertensión',
        'enfermedadesCronicas','embarazada','medicación',

];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dieta()
    {
        return $this->hasMany('App\Dieta');
    }

    public function entrenamiento()
    {
        return $this->hasMany('App\Entrenamiento');
    }

    public function getFullnameAttribute(){
        return $this->user->fullname;
    }
}
