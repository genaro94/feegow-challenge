<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Professional\IProfessionalSpecialtyList;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    public function __construct(private IProfessionalSpecialtyList $specialties) {}

    public function index(): View
    {
        $list = $this->specialties->execute();
        return view('scheduling.index', compact('list'));
    }
}
