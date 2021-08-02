<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdversitmentStoreRequest extends FormRequest
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
            'social_name' => ['required','string'],
            'fantasy_name' => ['required','string'],
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_mobile' => 'required',
            'state' => 'required',
            'city' => 'required',
            'reach_states' => ['required','min:1'],
            'reach_categories' => ['required','min:1'],
            'reach_segments' => ['required','min:1'],
            'reach_genres' => ['required','min:1'],
            'start_at' => ['required','date'],
            'end_at' => ['required','date'],
            'advertising_place_id' => 'required',
            'media_type' => 'required',
            'media_link' => ['required','url']
        ];
    }

    public function attributes()
    {
        return [
            'social_name' => "Razao Social",
            'fantasy_name' => "Nome Fantasia",
            'contact_name' => "Responsável",
            'contact_email' => "Email do responsável",
            'contact_phone' => "Telefone fixo do responsável",
            'contact_mobile' => "Telefone Movel do responsável",
            'state' => 'Estado',
            'city' => 'Cidate',
            'reach_states' => "Estados de alcance",
            'reach_categories' => "Categorias de alcance",
            'reach_segments' => "Areas de alcance",
            'reach_genres' => "Generos de alcance",
            'start_at' =>"Início do periodo do anuncio ",
            'end_at' =>"Fim do periodo do anuncio ",
            'advertising_place_id' => 'Local do anuncio',
            'media_type' => 'Tipo de anuncio',
            'media_link' => 'Link do anuncio'
        ];
    }
}
