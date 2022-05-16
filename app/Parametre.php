<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'nomp','unite','sous_groupe_id'
    ];
    public function sousGroupe(){
        return $this->belongsTo(SousGroupe::class);
    }
}
