<?php

namespace App\Http\Requests;

use App\Models\StudentProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStudentProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_profile_edit');
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'nullable',
            ],
            'couse_name'      => [
                'string',
                'nullable',
            ],
            'period'          => [
                'string',
                'nullable',
            ],
            'university_name' => [
                'string',
                'nullable',
            ],
            'lattes_link'     => [
                'string',
                'nullable',
            ],
            'phone'           => [
                'string',
                'nullable',
            ],
        ];
    }
}
