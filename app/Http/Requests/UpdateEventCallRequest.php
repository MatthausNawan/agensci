<?php

namespace App\Http\Requests;

use App\Models\EventCall;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEventCallRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_call_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'creator' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
