<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Patient\IPatientListSource;
use App\Http\Interfaces\Professional\IProfessionalList;
use App\Http\Interfaces\Professional\IProfessionalSpecialtyList;
use App\Http\Interfaces\Schedule\IScheduleCreation;
use App\Http\Requests\ScheduleCreateRequest;
use App\Services\CollectionPaginator as Paginator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    public function __construct(private IProfessionalSpecialtyList $specialties,
                                private IPatientListSource $listSources,
                                private IProfessionalList $professionalList,
                                private IScheduleCreation $scheduleCreation) {}

    public function index(Request $request): View
    {
        $specialties   = $this->specialties->execute();
        $listSources   = $this->listSources->execute();

        $professionals = $this->professionalList->execute($request);
        $professionals = Paginator::paginate($professionals['content'], 10);

        return view('scheduling.index', compact('specialties', 'listSources', 'professionals' ));
    }

    public function store(ScheduleCreateRequest $request)
    {
        $this->scheduleCreation->execute($request);
        return back()->with('success', 'Agendado com sucesso!');
    }
}
