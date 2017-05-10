<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenadorpersonal extends Model
{ //use Notifiable;

    //
    protected $fillable = [
        'especialidad',

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
