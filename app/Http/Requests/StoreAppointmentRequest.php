<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_id' => ['required', 'exists:customers,id'],
            'appointment_date' =>  ['required', 'date'],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Este campo é obrigatório',
            'exists' => 'Cliente não existe na base de dados',
        ];
    }
}
