<?php

namespace App\Application\Schedule;

use App\Application\Interfaces\IPersistScheduleRepository;
use App\Http\Interfaces\Schedule\IScheduleCreation;
use App\Http\Requests\ScheduleCreateRequest;
use App\Models\Schedule;

class ScheduleCreation implements IScheduleCreation
{
    public function __construct(private IPersistScheduleRepository $repository) {}

    function execute(ScheduleCreateRequest $request): int
    {
        $schedule                   = new Schedule;
        $schedule->specialty_id     = $request->specialty_id;
        $schedule->professional_id  = $request->professional_id;
        $schedule->name             = $request->name;
        $schedule->cpf              = $request->cpf;
        $schedule->source_id        = $request->source_id;
        $schedule->birthdate        = $request->birthdate;
        $schedule->date_time        = $request->date_time;

        return $this->repository->persist($schedule);
    }
}
