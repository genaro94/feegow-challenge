<?php

namespace App\Infrastructure\PersistenceViaEloquent\Schedules;

use App\Application\Interfaces\IPersistScheduleRepository;
use App\Models\Schedule;

class ScheduleRepository implements IPersistScheduleRepository
{
    function persist(Schedule $schedule): int
    {
        $schedule->save();
        return$schedule->id;
    }
}
