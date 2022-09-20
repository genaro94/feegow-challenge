<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->app->bind(
            'App\Http\Interfaces\Professional\IProfessionalSpecialtyList',
            'App\Application\Professional\ProfessionalSpecialtyList',
        );
    }
}
