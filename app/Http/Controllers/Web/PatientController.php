<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Patient\IPatientList;
use App\Services\CollectionPaginator as Paginator;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function __construct(private IPatientList $patientList) {}

    public function index(): View
    {
        $patients = $this->patientList->execute();
        $patients = Paginator::paginate($patients['content'], 10);

        return view('patients.index', compact('patients'));
    }
}
