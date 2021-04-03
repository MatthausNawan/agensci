<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class SpeakerStoreRequest extends FormRequest
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
            'name' => ['required','string'],
            'description' => ['required','string'],
            'bio' => ['required','string'],
            'areas' => ['required','string'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'string' => 'O campo :attribute tem que ser do tipo text',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Nome",
            'bio' => "Biografia",
            'description' => "Descrição Curta",
        ];
    }
}
