<?php

namespace App\Http\Interfaces\Schedule;

use App\Http\Requests\ScheduleCreateRequest;

interface IScheduleCreation
{
    function execute(ScheduleCreateRequest $request): int;
}
