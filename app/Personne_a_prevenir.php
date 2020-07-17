<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne_a_prevenir extends Model
{
    protected $guarded=[];
    public function etudiants(){
        return $this->hasMany('App\Etudiant');
    }
}
