<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $mensagens = [
            'name.required' => 'O campo razão social é obrigatório!',
            'name.max' => 'Você ultrapassou o limite maximo de caracteres em Razão Social',

            'site.required' => 'O campo site é obrigatório!',
            'site.max' => 'Você ultrapassou o limite maximo de caracteres em Site',

            'fantasy-name.required' => 'O campo nome fantasia é obrigatório!',
            'fantasy-name.max' => 'Você ultrapassou o limite maximo de caracteres em Nome Fantasia',

            'cnpj.required' => 'O campo nome CNPJ é obrigatório!',
            'cnpj.max' => 'Você ultrapassou o limite maximo de caracteres em CNPJ',
            'cnpj.numeric' => 'Formato incorreto em CNPJ',

            'address.required' => 'O campo endereço é obrigatorio.',
            'address.max' => 'Você ultrapassou o limite maximo de caracteres em Endereço',

            'address-number.required' => 'O campo numero de endereço é obrigatorio.',
            'address-number.max' => 'Você ultrapassou o limite maximo de caracteres em numero de endereço',

            'postal-code.required' => 'O campo CEP é obrigatorio.',
            'postal-code.max' => 'Você ultrapassou o limite maximo de caracteres em CEP',

            'district.required' => 'O campo bairro é obrigatorio.',
            'district.max' => 'Você ultrapassou o limite maximo de caracteres em bairro',

            'city.required' => 'O campo cidade é obrigatorio.',
            'city.max' => 'Você ultrapassou o limite maximo de caracteres em cidade',

            'uf.required' => 'O campo UF é obrigatorio.',
            'uf.max' => 'Você ultrapassou o limite maximo de caracteres em UF',

            'phone.required' => 'O campo telefone é obrigatorio.',
            'phone.max' => 'Você ultrapassou o limite maximo de caracteres em telefone',

            'cell-number.required' => 'O campo número de celular é obrigatorio.',
            'cell-number.max' => 'Você ultrapassou o limite maximo de caracteres em numero do celular',

            'email.required' => 'O campo de email é obrigatorio.',
            'email.max' => 'Você ultrapassou o limite maximo de caracteres em email',
            'email.email' => 'Você ultrapassou o limite maximo de caracteres em numero do celular',

            'requester-name.required' => 'O campo de nome do responsavel pela solicitação é obrigatorio.',
            'requester-name.max' => 'Você ultrapassou o limite maximo de caracteres em responsavel pela solicitação',

            'requester-cpf.required' => 'O campo de CPF do responsavel pela solicitação é obrigatorio.',
            'requester-cpf.max' => 'Você ultrapassou o limite maximo de caracteres no CPF do responsavel pela solicitação',

            'requester-date.required' => 'O campo de data da solicitação é obrigatorio.',

            'signature.required' => 'O campo de assinatura é obrigatorio.',

            'stamp.required' => 'O campo de carimbo é obrigatorio.',

            'email.required' => 'O campo de email é obrigatorio.',
            'email.max' => 'Você ultrapassou o limite maximo de caracteres em email',

            'password.required' => 'O campo de senha é obrigatorio.',
            'password.max' => 'Você ultrapassou o limite maximo de caracteres em senha',
            'password.confirmed' => 'As senhas não conferem',
        ];

        $request->validate([
            'name' => 'required|max:255',
            'site' => 'required|max:255',
            'fantasy-name' => 'required|max:255',
            'cnpj' => 'required|max:255',
            'address' => 'required|max:255',
            'address-number' => 'required|max:10',
            'postal-code' => 'required|max:20',
            'district' => 'required|max:30',
            'city' => 'required|max:30',
            'uf'  => 'required|max:5',
            'phone' => 'required|max:20',
            'cell-number'  => 'required|max:20',
            'email'  => 'required|max:50|email',
            'linkedin'  => 'required|max:255',
            'facebook'  => 'required|max:255',
            'whatsapp'  => 'required|max:255',
            'instagram'  => 'required|max:255',
            'twitter'  => 'required|max:255',
            'youtube'  => 'required|max:255',
            'logomarca'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'requester-name'  => 'required|max:255',
            'requester-cpf'  => 'required|max:255',
            'request-date'  => 'required',
            'signature'  =>  'required',
            'stamp' =>  'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ], $mensagens);

        $imageName = time().'.'.$request->logomarca->extension();
        $request->logomarca->move(public_path('images'), $imageName);

        $input['logomarca'] = $imageName;

        $company = Company::create($input);

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password'])
        ]);

        $user->roles()->attach(3);

        return back()
            ->with('success', 'Registro inserido com sucesso');
    }
}
