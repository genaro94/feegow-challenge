<?php

namespace App\Application\Professional;

use App\Http\Interfaces\Professional\IProfessionalSpecialtyList;
use App\Facades\ExternalApiFacade;

class ProfessionalSpecialtyList implements IProfessionalSpecialtyList
{
    function execute(): array
    {
        return ExternalApiFacade::get('/specialties/list')->json();
    }
}
