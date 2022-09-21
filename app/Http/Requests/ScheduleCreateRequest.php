<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'specialty_id'     => 'required|integer',
            'professional_id'  => 'required|integer',
            'name'             => 'required|string',
            'cpf'              => 'required|integer',
            'source_id'        => 'required|integer',
            'birthdate'        => 'required|string',
            'date_time'        => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'specialty_id.required'     => 'A especialidade é obrigatória.',
            'specialty_id.integer'      => 'A especialidade tem que ser no formato adequado.',
            'professional_id.required'  => 'O profissional é obrigatório.',
            'professional_id.integer'   => 'O profissional tem que ser no formato adequado.',
            'name.required'             => 'O nome do paciente é obrigatório.',
            'name.string'               => 'O nome do paciente só aceita letras.',
            'cpf.required'              => 'O CPF é obrigatório.',
            'cpf.integer'               => 'O CPF só aceita números.',
            'source_id.required'        => 'Como nós conheceu é obrigatório.',
            'source_id.integer'         => 'Como nós conheceu tem que ser no formato adequado.',
            'birthdate.required'        => 'A Data de Nascimento é obrigatória.',
            'birthdate.integer'         => 'A Data de Nascimento tem que ser no formato adequado.',
            'date_time.required'        => 'A Data de Consulta é obrigatória',
            'date_time.integer'        => 'A Data de Consulta tem que ser no formato adequado',
        ];
    }
}
