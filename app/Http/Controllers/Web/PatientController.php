<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Patient\IPatientList;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(private IPatientList $patientList) {}

    public function index()
    {
        $patients = $this->patientList->execute();
        return view('patients.list', compact('patients'));
    }
}
