<?php

namespace Tests\Feature\Patient;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientListTest extends TestCase
{
    public function test_it_should_load_patient_screen(): void
    {
        $response = $this->get('/patients');

        $response->assertStatus(200);
    }
}
