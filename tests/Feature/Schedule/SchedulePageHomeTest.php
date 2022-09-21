<?php

namespace Tests\Feature\Schedule;

use Tests\TestCase;

class SchedulePageHomeTest extends TestCase
{
    public function test_it_should_load_home_screen(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
