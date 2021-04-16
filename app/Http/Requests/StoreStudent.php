<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'name' => 'required',
            'genre' => 'required',
            'course_name' => 'required',
            'cpf' => 'required:unique,students',
            'university_name' => 'required',
            'matriculation' => 'required',
            'lattes_link' => 'required',
            'cpf'  => 'required',
            'email'  => 'required|unique:users',
            'phone' => 'required',
            'city' => 'required',
            'uf'  => 'required',
            'country'  => 'required',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'max' => 'O campo :attribute é muito longo',
            'email' => 'O campo :attribute deve ser um e-mail válido',
            'unique' => 'O campo :attribute digitado já está em uso, utilize outro',
            'confirmed' => 'O campo senha não confere',
        ];
    }
}
