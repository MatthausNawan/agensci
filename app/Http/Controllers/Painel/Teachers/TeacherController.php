<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacher;
use App\Http\Requests\Teacher\SpeakerStoreRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Event;
use App\Models\ExternalLik;
use App\Models\Post;
use App\Models\Segment;
use App\Models\Speaker;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('check-panel');
    }

    public function showRegisterTeacherPage()
    {
        $countries = Country::all();
        return view('frontend.pages.teachers.register', compact('countries'));
    }

    public function store(StoreTeacher $request)
    {
        $teacher = Teacher::create($request->all());

        TeacherService::createUserTeacher($request, $teacher);

        return  redirect()->route('site.static.success-register')->with('success', 'Registro inserido com sucesso');
    }

    public function home()
    {
        $user = Auth::user();

        return view(
            'frontend.pages.teachers.painel',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'statistics_softwares' => ExternalLik::where('category_id', Category::C_PROGRAMAS_DE_ESTATISTICAS)->take(5)->get(),
                'util_apps' => ExternalLik::where('category_id', Category::C_APLICATIVOS_UTEIS)->take(5)->get(),
                'teacher' => $user->teacher,
                'posts' =>Post::latest()->take(5)->get()
            ]
        );
    }
}
