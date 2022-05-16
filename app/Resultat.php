<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $fillable = [
       'patient_id'
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

}
