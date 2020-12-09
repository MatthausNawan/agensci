<?php

namespace App\Http\Requests;

use App\Models\Segment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSegmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('segment_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
