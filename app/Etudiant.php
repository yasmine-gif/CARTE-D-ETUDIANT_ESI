<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{    
    protected $guarded=[];
    public function personne_a_prevenir(){
        return $this->belongsTo('App\Personne_a_prevenir');
    }

    public function nationalite(){
        return $this->belongsTo('App\Nationalite');
    }

    public function filiere(){
        return $this->belongsTo('App\Filiere');
    }
}
