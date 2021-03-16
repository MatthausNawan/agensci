<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacher;
use App\Models\Category;
use App\Models\Event;
use App\Models\ExternalLik;
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

    public function getPosts()
    {
        return view('frontend.pages.teachers.posts.index');
    }

    public function createPost()
    {
        return view('frontend.pages.teachers.posts.create');
    }

    public function storePost(Request $request)
    {
        dd($request->all());
    }


    public function getEvents()
    {
        $events = Event::all();
        return view('frontend.pages.teachers.events.index', compact('events'));
    }

    public function createEvents()
    {
        $segments = Segment::all();
        return view('frontend.pages.teachers.events.create', compact('segments'));
    }

    public function storeEvents(Request $request)
    {
        dd($request->all());
    }

    public function getSpeakers()
    {
        $speakers = Speaker::all();
        return view('frontend.pages.teachers.speakers.index', compact('speakers'));
    }

    public function createSpeakers()
    {
        $segments = Segment::all();
        return view('frontend.pages.teachers.speakers.create', compact('segments'));
    }

    public function storeSpeaker(Request $request)
    {
        dd($request->all());
    }

    public function getPersonalLinks()
    {
        // $speakers = Speaker::all();
        return view('frontend.pages.teachers.personal-links.index');
    }

    public function createPersonalLinks()
    {
        // $segments = Segment::all();
        return view('frontend.pages.teachers.personal-links.create');
    }

    public function storePersonalLinks(Request $request)
    {
        dd($request->all());
    }
}
