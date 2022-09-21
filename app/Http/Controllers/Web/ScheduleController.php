<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Patient\IPatientListSource;
use App\Http\Interfaces\Professional\IProfessionalList;
use App\Http\Interfaces\Professional\IProfessionalSpecialtyList;
use App\Services\CollectionPaginator as Paginator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    public function __construct(private IProfessionalSpecialtyList $specialties,
                                private IPatientListSource $listSources,
                                private IProfessionalList $professionalList) {}

    public function index(Request $request): View
    {
        $specialties   = $this->specialties->execute();
        $listSources   = $this->listSources->execute();

        $professionals = $this->professionalList->execute($request);
        $professionals = Paginator::paginate($professionals['content'], 10);

        return view('scheduling.index', compact('specialties', 'listSources', 'professionals' ));
    }
}
