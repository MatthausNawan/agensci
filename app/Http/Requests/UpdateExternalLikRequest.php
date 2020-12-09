<?php

namespace App\Http\Requests;

use App\Models\ExternalLik;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExternalLikRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('external_lik_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'site' => [
                'string',
                'nullable',
            ],
        ];
    }
}
