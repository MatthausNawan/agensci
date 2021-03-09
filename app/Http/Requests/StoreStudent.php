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
            'name' => 'required|max:255',
            'genre' => 'required|max:255',
            'course-name' => 'required|max:255',
            'cpf' => 'required|max:255',
            'specialization' => 'required|max:255',
            'university-name' => 'required|max:10',
            'matriculation' => 'required|max:20',
            'lattes-link' => 'required|max:30',
            'cpf'  => 'required|max:255',
            'email'  => 'required|max:50|email',
            'phone' => 'required|max:20',
            // 'whatsapp'  => 'required|max:20',
            'city' => 'required|max:30',
            'uf'  => 'required|max:5',
            'country'  => 'required|max:255',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório!',
            'name.max' => 'Você ultrapassou o limite maximo de caracteres em Razão Social',

            'genre.required' => 'O campo genero é obrigatório!',
            'genre.max' => 'Você ultrapassou o limite maximo de caracteres em Genero',

            'course-name.required' => 'O campo nome do curso é obrigatório!',
            'course-name.max' => 'Você ultrapassou o limite maximo de caracteres em Nome do Curso',

            'cpf.required' => 'O campo nome CPF é obrigatório!',
            'cpf.max' => 'Você ultrapassou o limite maximo de caracteres em CPF',
            'cpf.numeric' => 'Formato incorreto em CPF',

            'specialization.required' => 'O campo pós-graduação é obrigatorio.',
            'specialization.max' => 'Você ultrapassou o limite maximo de caracteres em pós-graduação',

            'university-name.required' => 'O campo nome da universidade é obrigatorio.',
            'university-name.max' => 'Você ultrapassou o limite maximo de caracteres em nome da universidade',

            'matriculation.required' => 'O campo matricula é obrigatorio.',
            'matriculation.max' => 'Você ultrapassou o limite maximo de caracteres em matricula',

            'occupation-lattes.required' => 'O campo atuação lattes é obrigatorio.',
            'occupation-lattes.max' => 'Você ultrapassou o limite maximo de caracteres em atuação lattes',

            'lattes-link.required' => 'O campo link lattes é obrigatorio.',
            'lattes-link.max' => 'Você ultrapassou o limite maximo de caracteres em link lattes',

            'cpf.required' => 'O campo de CPF do responsavel pela solicitação é obrigatorio.',
            'cpf.max' => 'Você ultrapassou o limite maximo de caracteres no CPF do responsavel pela solicitação',

            'email.required' => 'O campo de email é obrigatorio.',
            'email.max' => 'Você ultrapassou o limite maximo de caracteres em email',
            'email.email' => 'Você ultrapassou o limite maximo de caracteres em numero do celular',

            'phone.required' => 'O campo telefone é obrigatorio.',
            'phone.max' => 'Você ultrapassou o limite maximo de caracteres em telefone',

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
