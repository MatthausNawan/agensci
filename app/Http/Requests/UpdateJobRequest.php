<?php

namespace App\Http\Requests;

use App\Models\Job;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJobRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_edit');
    }

    public function rules()
    {
        return [
            'company'         => [
                'string',
                'nullable',
            ],
            'area'            => [
                'string',
                'nullable',
            ],
            'formation'       => [
                'string',
                'nullable',
            ],
            'address'         => [
                'string',
                'nullable',
            ],
            'ocuppation'      => [
                'string',
                'nullable',
            ],
            'qty_jobs'        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'expiration_date' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
