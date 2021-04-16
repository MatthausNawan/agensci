<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacher extends FormRequest
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
            'formation' => 'required|max:255',
            'speciality' => 'required|max:255',
            'occupation_lattes' => 'required|max:255',
            'resume_link' => 'required|max:255',
            'job' => 'required|max:255',
            'class_council' => 'required|max:255',
            'institution_works' => 'required|max:255',
            'office' => 'required|max:255',
            'enrollment_number' => 'required|max:255',
            'cpf' => 'required|max:255',
            'email'  => 'required|max:50|email',
            'cell_number' => 'required|max:20',
            'whatsapp'  => 'required|max:20',
            'postal_code'  => 'required|max:255',
            'district'  => 'required|max:255',
            'country'  => 'required|max:255',
            'city' => 'required|max:30',
            'uf'  => 'required|max:5',
            'password' => 'required|confirmed',
            'email' => 'required|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo razão social é obrigatório!',
            'name.max' => 'Você ultrapassou o limite maximo de caracteres em Razão Social',

            'cpf.required' => 'O campo nome CPF é obrigatório!',
            'cpf.max' => 'Você ultrapassou o limite maximo de caracteres em CPF',
            'cpf.numeric' => 'Formato incorreto em CPF',

            'speciality.required' => 'O campo especialização é obrigatorio.',
            'speciality.max' => 'Você ultrapassou o limite maximo de caracteres em especialização',

            'occupation_lattes.required' => 'O campo ocupação lattes é obrigatorio.',
            'occupation_lattes.max' => 'Você ultrapassou o limite maximo de caracteres em ocupação lattes',

            'office.required' => 'O campo trabalho é obrigatorio.',
            'office.max' => 'Você ultrapassou o limite maximo de caracteres em trabalho',

            'institution_works.required' => 'O campo institução é obrigatorio.',
            'institution_works.max' => 'Você ultrapassou o limite maximo de caracteres em institução',

            'class_council.required' => 'O campo conselho de classe é obrigatorio.',
            'class_council.max' => 'Você ultrapassou o limite maximo de caracteres em conselho de classe',

            'formation.required' => 'O campo especialização é obrigatorio.',
            'formation.max' => 'Você ultrapassou o limite maximo de caracteres em especialização',

            'enrollment_number.required' => 'O campo matricula é obrigatorio.',
            'enrollment_number.max' => 'Você ultrapassou o limite maximo de caracteres em matricula',

            'job.required' => 'O campo profissão é obrigatorio.',
            'job.max' => 'Você ultrapassou o limite maximo de caracteres em profissão',

            'resume_link.required' => 'O campo link lattes é obrigatorio.',
            'resume_link.max' => 'Você ultrapassou o limite maximo de caracteres em link lattes',

            'postal_code.required' => 'O campo codigo postal é obrigatorio.',
            'postal_code.max' => 'Você ultrapassou o limite maximo de caracteres em codigo postal',

            'district.required' => 'O campo distrito é obrigatorio.',
            'district.max' => 'Você ultrapassou o limite maximo de caracteres em distrito',

            'email.required' => 'O campo de email é obrigatorio.',
            'email.max' => 'Você ultrapassou o limite maximo de caracteres em email',
            'email.email' => 'Você ultrapassou o limite maximo de caracteres em numero do celular',

            'cell_number.required' => 'O campo telefone é obrigatorio.',
            'cell_number.max' => 'Você ultrapassou o limite maximo de caracteres em telefone',

            'whatsapp.required' => 'O campo número de celular é obrigatorio.',
            'whatsapp.max' => 'Você ultrapassou o limite maximo de caracteres em numero do celular',


            'city.required' => 'O campo cidade é obrigatorio.',
            'city.max' => 'Você ultrapassou o limite maximo de caracteres em cidade',

            'uf.required' => 'O campo UF é obrigatorio.',
            'uf.max' => 'Você ultrapassou o limite maximo de caracteres em UF',

            'country.required' => 'O campo País é obrigatorio.',
            'country.max' => 'Você ultrapassou o limite maximo de caracteres em País',

            'password.required' => 'O campo de senha é obrigatorio.',
            'password.max' => 'Você ultrapassou o limite maximo de caracteres em senha',
            'password.confirmed' => 'As senhas não conferem',
        ];
    }
}
