<?php

namespace App\Application\Professional;

use App\Facades\ExternalApiFacade;
use App\Http\Interfaces\Professional\IProfessionalList;
use Illuminate\Http\Request;

class ProfessionalList implements IProfessionalList
{
    function execute(Request $request): array
    {
        return ExternalApiFacade::get('/professional/list' , [
            'ativo'             => true,
            'especialidade_id'  => $request->especialidade_id
        ])->json();
    }
}
