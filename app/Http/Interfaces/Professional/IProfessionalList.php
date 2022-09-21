<?php

namespace App\Http\Interfaces\Professional;

use Illuminate\Http\Request;

interface IProfessionalList
{
    function execute(Request $request): array;
}
