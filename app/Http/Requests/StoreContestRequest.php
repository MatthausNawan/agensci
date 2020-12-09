<?php

namespace App\Http\Requests;

use App\Models\Contest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contest_create');
    }

    public function rules()
    {
        return [
            'title'     => [
                'string',
                'nullable',
            ],
            'salary'    => [
                'string',
                'nullable',
            ],
            'vacancies' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'link'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
