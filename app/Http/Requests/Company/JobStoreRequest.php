<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class JobStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('job_create') ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'              => 'required',
            'ocuppation'        => 'required',
            'qty_jobs'          => 'required',
            'salary'            => 'required',
            'expiration_date'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'segment_id.required'       => 'O campo área é obrigatório.',
            'occupation.required'       => 'O campo cargo é obrigatório.',
            'qty_jobs.required'         => 'O campo vagas é obrigatório.',
            'salary.required'           => 'O campo salário é obrigatório.',
            'expiration_date.required'  => 'O campo data de expiração é obrigatório.',
        ];
    }
}
