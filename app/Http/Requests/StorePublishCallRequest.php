<?php

namespace App\Http\Requests;

use App\Models\PublishCall;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePublishCallRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('publish_call_create');
    }

    public function rules()
    {
        return [
            'magazine' => [
                'string',
                'nullable',
            ],
            'issn' => [
                'string',
                'nullable',
            ],
            'qualis' => [
                'string',
                'nullable',
            ],
            'frequency' => [
                'string',
                'nullable',
            ],
            'organizatin' => [
                'string',
                'nullable',
            ],
            'submission_period' => [
                'string',
                'nullable',
            ],
            'link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
