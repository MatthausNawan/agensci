<?php

namespace App\Http\Controllers\Painel\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use App\Models\Category;
use App\Models\Country;
use App\Models\ExternalLik;
use App\Models\Post;
use App\Models\Student;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('check-panel');
    }

    public function showRegisterStudentPage()
    {
        $countries = Country::all();
        return view('frontend.pages.students.register', compact('countries'));
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
        $user = Auth::user();
        return view(
            'frontend.pages.students.painel',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'high_school_tvs' => ExternalLik::where('category_id', Category::C_TV_UNIVERSITARIAS)->take(5)->get(),
                'high_school_radios' => ExternalLik::where('category_id', Category::C_RADIOS_UNIVERSITARIAS)->take(5)->get(),
                'posts' => Post::latest()->take(5)->get(),
                'student' => $user->student
            ]
        );
    }
}
