<?php

namespace App\Http\Requests;

use App\Models\LocalAdvertisement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLocalAdvertisementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('local_advertisement_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'page' => [
                'required',
            ],
            'location' => [
                'string',
                'required',
            ],
            'country_percent' => [
                'numeric',
            ],
            'genre_percent' => [
                'numeric',
            ],
            'category_percent' => [
                'numeric',
            ],
            'area_percent' => [
                'numeric',
                'required',
            ],
            'days_percent' => [
                'required',
            ],
        ];
    }
}
