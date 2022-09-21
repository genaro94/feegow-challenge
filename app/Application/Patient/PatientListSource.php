<?php

namespace App\Application\Patient;

use App\Facades\ExternalApiFacade;
use App\Http\Interfaces\Patient\IPatientListSource;

class PatientListSource implements IPatientListSource
{
    function execute(): array
    {
        return ExternalApiFacade::get('/patient/list-sources')->json();
    }
}
