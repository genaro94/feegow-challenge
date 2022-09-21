<?php

namespace App\Http\Interfaces\Patient;

interface IPatientListSource
{
    function execute(): array;
}
