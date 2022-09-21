<?php

namespace App\Application\Interfaces;

use App\Models\Schedule;

interface IPersistScheduleRepository
{
    function persist(Schedule $schedule): int;
}
