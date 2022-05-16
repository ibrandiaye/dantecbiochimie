<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'nomm'
    ];

    public function resultatDetails(){
        return $this->hasMany(ResultatDetail::class);
    }
}
