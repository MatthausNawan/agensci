<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Services\StudentService;

class StudentController extends Controller
{
    public function store(StoreStudent $request)
    {
        $student = Student::create($request->all());

        StudentService::createUserStudent($request);

        return  redirect()->back()->with('success', 'Registro inserido com sucesso');

    }
}
