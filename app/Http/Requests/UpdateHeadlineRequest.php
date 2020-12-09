<?php

namespace App\Http\Requests;

use App\Models\Headline;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateHeadlineRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('headline_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
