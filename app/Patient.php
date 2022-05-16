<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'nomp','prenomp','provenance','age','sexe'
    ];
    public function resultats(){
        return $this->hasMany(Resultat::class);
    }
}
