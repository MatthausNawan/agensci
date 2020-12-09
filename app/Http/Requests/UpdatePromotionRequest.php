<?php

namespace App\Http\Requests;

use App\Models\Promotion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePromotionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('promotion_edit');
    }

    public function rules()
    {
        return [
            'entity'              => [
                'string',
                'nullable',
            ],
            'subscription_period' => [
                'string',
                'nullable',
            ],
            'edital_link'         => [
                'string',
                'nullable',
            ],
        ];
    }
}
