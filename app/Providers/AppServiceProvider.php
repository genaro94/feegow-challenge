<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $this->app->bind(
            'App\Http\Interfaces\Professional\IProfessionalSpecialtyList',
            'App\Application\Professional\ProfessionalSpecialtyList',
        );

        $this->app->bind(
            'App\Http\Interfaces\Professional\IProfessionalList',
            'App\Application\Professional\ProfessionalList',
        );

        $this->app->bind(
            'App\Http\Interfaces\Patient\IPatientListSource',
            'App\Application\Patient\PatientListSource',
        );

        $this->app->bind(
            'App\Http\Interfaces\Patient\IPatientList',
            'App\Application\Patient\PatientList',
        );

        $this->app->bind(
            'App\Http\Interfaces\Schedule\IScheduleCreation',
            'App\Application\Schedule\ScheduleCreation',
        );


        $this->app->bind(
            'App\Application\Interfaces\IPersistScheduleRepository',
            'App\Infrastructure\PersistenceViaEloquent\Schedules\ScheduleRepository',
        );
    }
}
