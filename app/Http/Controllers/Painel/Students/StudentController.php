<?php

namespace App\Http\Controllers\Painel\Students;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreStudent;
use App\Models\Category;
use App\Models\Country;
use App\Models\ExternalLik;
use App\Models\Job;
use App\Models\Post;
use App\Models\Student;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    use MediaUploadingTrait;

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

    public function getProfile()
    {
        $user = Auth::user();
        $profile = $user->student;
        $countries = Country::all();
        return view('frontend.pages.students.profile', compact('profile', 'countries'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $student = $user->student;

        $student->update($request->all());

        if ($request->input('logo', false)) {
            if (!$student->logo || $request->input('logo') !== $student->logo->file_name) {
                if ($student->logo) {
                    $student->logo->delete();
                }

                $student->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($student->logo) {
            $student->logo->delete();
        }

        return  redirect()->back()->with('success', 'Dados Atualizados!');
    }


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
                'jobs' => Job::with('companyJob')->get(),
                'student' => $user->student
            ]
        );
    }
}
