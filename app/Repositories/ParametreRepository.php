<?php

namespace App\Repositories;

use App\Parametre;

class ParametreRepository extends RessourceRepository{

    public function __construct(Parametre $parametre)
    {
        $this->model = $parametre;
    }
}
