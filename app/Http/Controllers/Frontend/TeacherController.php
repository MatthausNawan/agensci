<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacher;
use App\Models\Category;
use App\Models\ExternalLik;
use App\Models\Teacher;
use App\Services\TeacherService;

class TeacherController extends Controller
{

    public function store(StoreTeacher $request)
    {
        $teacher = Teacher::create($request->all());

        TeacherService::createUserTeacher($request, $teacher);

        return  redirect()->back()->with('success', 'Registro inserido com sucesso');
    }


     // Area Administrativa
     public function home()
     {

         return view(
             'frontend.pages.teachers.painel',
             [
                 'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
             ]
         );

     }
}
