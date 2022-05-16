<?php

namespace App\Repositories;

use App\Machine;

class MachineRepository extends RessourceRepository{

    public function __construct(Machine $machine)
    {
        $this->model = $machine;
    }
}
