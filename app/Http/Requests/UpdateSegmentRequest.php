<?php

namespace App\Http\Requests;

use App\Models\Segment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSegmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('segment_edit');
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
