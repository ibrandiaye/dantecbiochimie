<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultatDetail extends Model
{ protected $fillable = [
    'valeur','parametre_id','resultat_id','machine_id'
];

public function parametre(){
    return $this->belongsTo(Parametre::class);
}
public function resultat(){
    return $this->belongsTo(Resultat::class);
}
public function machine(){
    return $this->belongsTo(Machine::class);
}
}
