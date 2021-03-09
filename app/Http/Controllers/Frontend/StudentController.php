<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use App\Models\Category;
use App\Models\ExternalLik;
use App\Models\Student;
use App\Services\StudentService;

class StudentController extends Controller
{
    public function showRegisterStudentPage()
    {
        return view('frontend.pages.students.register', []);
    }

    public function store(StoreStudent $request)
    {
        $student = Student::create($request->all());

        StudentService::createUserStudent($request, $student);

        return  redirect()->route('site.static.success-register')->with('success', 'Registro inserido com sucesso');
    }

    // Area Administrativa
    public function home()
    {

        return view(
            'frontend.pages.students.painel',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
            ]
        );
    }
}
