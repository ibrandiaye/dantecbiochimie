<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousGroupe extends Model
{
    protected $fillable = [
        'nom',
    ];
    public function parametres(){
        return $this->hasMany(Parametre::class);
    }
}
