<?php

namespace App\Http\Requests;

use App\Models\Headline;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreHeadlineRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('headline_create');
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
