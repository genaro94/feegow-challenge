<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class ExternalApiProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('api-feegow', function() {
            return Http::withOptions([
                'verify'   => false,
                'base_uri' => 'https://api.feegow.com/v1/api/',
            ])
            ->withHeaders([
                'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOjE2NDQyNDAzODQsImxpY2Vuc2VJRCI6IjEwNSJ9._v3HJr5GUYAc14WW6HDxM5BlxAl-1KJeaqq2OfG67sM'
            ]);
        });
    }
}
