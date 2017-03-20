<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model

{ use  Notifiable;
    //
    protected $fillable = [
        'edad','sexo','altura','peso','haceDeporte','numeroDeHoras','deporteCalle','deporteCasa',
        'quiereDieta','observaciones','problemasMusculares','problemasCardiovasculares','hipertensión',
        'enfermedadesCronicas','embarazada','medicación',

];


}
