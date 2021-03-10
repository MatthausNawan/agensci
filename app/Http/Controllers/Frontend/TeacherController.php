<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacher;
use App\Models\Category;
use App\Models\ExternalLik;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('check-panel');
    }

    public function showRegisterTeacherPage(){
        return view('frontend.pages.teachers.register', []);
    }

    public function store(StoreTeacher $request)
    {
        $teacher = Teacher::create($request->all());

        TeacherService::createUserTeacher($request, $teacher);

        return  redirect()->route('site.static.success-register')->with('success', 'Registro inserido com sucesso');
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
