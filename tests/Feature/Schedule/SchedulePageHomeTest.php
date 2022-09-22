<?php

namespace Tests\Feature\Schedule;

use App\Services\CollectionPaginator as Paginator;
use App\Facades\ExternalApiFacade;
use Tests\TestCase;

class SchedulePageHomeTest extends TestCase
{
    public function test_it_should_load_home_screen(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_homepage_with_the_specialties_professionals_and_how_we_find_out(): void
    {
        $professionals = ExternalApiFacade::get('/professional/list')->json();
        $professionals = Paginator::paginate($professionals['content'], 10);

        $this->get(route('home'))
             ->assertViewHasAll([
                'specialties'    => ExternalApiFacade::get('/specialties/list')->json(),
                'listSources'    => ExternalApiFacade::get('/patient/list-sources')->json(),
                'professionals'  => $professionals
             ]);
    }

    public function test_the_homepage_with_professionals_listing_by_specialty_id(): void
    {
        $specialties   = ExternalApiFacade::get('/specialties/list')->json();

        $professionals = ExternalApiFacade::get('/professional/list' , [
            'ativo'             => true,
            'especialidade_id'  => $specialties['content'][0]['especialidade_id']
        ])->json();

        $professionals = Paginator::paginate($professionals['content'], 10);

        $this->get('/?especialidade_id=' . $specialties['content'][0]['especialidade_id'])
             ->assertViewHasAll([
                'specialties'    => $specialties,
                'listSources'    => ExternalApiFacade::get('/patient/list-sources')->json(),
                'professionals'  => $professionals
             ]);
    }
}
