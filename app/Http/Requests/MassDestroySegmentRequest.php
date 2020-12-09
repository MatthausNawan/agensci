<?php

namespace App\Http\Requests;

use App\Models\Segment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySegmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('segment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:segments,id',
        ];
    }
}
