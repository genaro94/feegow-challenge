<?php

namespace App\Application\Patient;

use App\Facades\ExternalApiFacade;
use App\Http\Interfaces\Patient\IPatientList;

class PatientList implements IPatientList
{
    function execute(): array
    {
        return ExternalApiFacade::get('/patient/list')->json();
    }
}
