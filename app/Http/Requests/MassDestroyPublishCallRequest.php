<?php

namespace App\Http\Requests;

use App\Models\PublishCall;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPublishCallRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('publish_call_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:publish_calls,id',
        ];
    }
}
