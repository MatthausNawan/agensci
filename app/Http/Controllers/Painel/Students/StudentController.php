<?php

namespace App\Http\Controllers\Painel\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use App\Models\Category;
use App\Models\ExternalLik;
use App\Models\Student;
use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('check-panel');
    }

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

    public function getPersonalLinks()
    {
        // $speakers = Speaker::all();
        return view('frontend.pages.students.personal-links.index');
    }

    public function createPersonalLinks()
    {
        // $segments = Segment::all();
        return view('frontend.pages.students.personal-links.create');
    }

    public function storePersonalLinks(Request $request)
    {
        dd($request->all());
    }
}
