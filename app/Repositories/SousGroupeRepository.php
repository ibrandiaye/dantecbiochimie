<?php

namespace App\Repositories;

use App\SousGroupe;

class SousGroupeRepository extends RessourceRepository{

    public function __construct(SousGroupe $sousGroupe)
    {
        $this->model = $sousGroupe;
    }
}
