<?php

namespace App\Repositories;

use App\Patient;

class PatientRepository extends RessourceRepository{

    public function __construct(Patient $patient)
    {
        $this->model = $patient;
    }
}
