<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanies extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'site' => 'required|max:255',
            'fantasy_name' => 'required|max:255',
            'cnpj' => 'required|max:255',
            'address' => 'required|max:255',
            'address_number' => 'required|max:10',
            'postal_code' => 'required|max:20',
            'district' => 'required|max:30',
            'city' => 'required|max:30',
            'uf'  => 'required|max:2',
            'phone' => 'required|max:20',
            'cell_number'  => 'required|max:20',
            'requester_name'  => 'required|max:255',
            'requester_cpf'  => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'max' => 'O campo :attribute é muito longo',
            'email' => 'O campo :attribute deve ser um e-mail válido',
            'unique' => 'O campo :attribute digitado já está em uso, utilize outro',
            'confirmed' => 'O campo senha não confere',
        ];
    }
}
