<?php

namespace App\Http\Requests;

use App\Models\ExternalLik;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExternalLikRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('external_lik_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:external_liks,id',
        ];
    }
}
