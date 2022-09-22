<?php

namespace Tests\Feature\Patient;

use App\Services\CollectionPaginator as Paginator;
use App\Facades\ExternalApiFacade;
use Tests\TestCase;

class PatientListTest extends TestCase
{
    public function test_it_should_load_patient_screen(): void
    {
        $response = $this->get('/patients');

        $response->assertStatus(200);
    }

    public function test_the_page_patient_with_listing(): void
    {
        $this->get('/patients')
             ->assertViewHasAll(['patients']);
    }
}
