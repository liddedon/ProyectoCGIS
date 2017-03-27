
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente_entrenamiento extends Model
{
     use Notifiable;

    //
    protected $fillable = [
        'cliente_id','entrenamiento_id',

        ];
}
