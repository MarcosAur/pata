<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'unique:customers,name'],
            'phone' => ['required', 'string',],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Este campo é obrigatório',
            'unique' => 'Já existe um paciente com esse nome',
        ];
    }
}
