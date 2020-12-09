<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_create');
    }

    public function rules()
    {
        return [
            'segment_id'           => [
                'required',
                'integer',
            ],
            'title'                => [
                'string',
                'nullable',
            ],
            'start_date'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'subscripition_period' => [
                'string',
                'nullable',
            ],
        ];
    }
}
