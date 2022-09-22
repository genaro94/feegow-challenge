<?php

namespace Tests\Feature\Schedule;

use Tests\TestCase;
use Carbon\Carbon;

class ScheduleStoreTest extends TestCase
{
    public function test_store_schedule(): void
    {
        $this->post('/schedule/store', [
            'specialty_id'     => 1,
            'professional_id'  => 2,
            'name'             => 'Maria da Conceição Silva',
            'cpf'              => 1234567890,
            'source_id'        => 2,
            'birthdate'        => '1990-09-09',
            'date_time'        => Carbon::today()->format('Y-m-d H:m:s'),
        ])->assertSessionHasNoErrors();

        $this->assertDatabaseHas('schedules', [
            'cpf'    => '1234567890',
        ]);
    }

    public function test_store_schedule_with_message_success(): void
    {
        $this->post('/schedule/store', [
            'specialty_id'     => 1,
            'professional_id'  => 2,
            'name'             => 'Maria da Conceição Silva',
            'cpf'              => 1234567890,
            'source_id'        => 2,
            'birthdate'        => '1990-09-09',
            'date_time'        => Carbon::today()->format('Y-m-d H:m:s'),
        ])
        ->assertSessionHasNoErrors()
        ->with(['success' => __('Agendado com sucesso!')]);
    }

    public function test_specialty_id_required(): void
    {
        $this->post('/schedule/store', [
            'specialty_id'     => null,
            'professional_id'  => 2,
            'name'             => 'Maria da Conceição Silva',
            'cpf'              => 1234567890,
            'source_id'        => 2,
            'birthdate'        => '1990-09-09',
            'date_time'        => Carbon::today()->format('Y-m-d H:m:s'),
        ])->assertSessionHasErrors(['specialty_id']);
    }
}
