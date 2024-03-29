<?php

namespace App\Http\Controllers\Painel\Students;

use App\Models\EventCall;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreStudent;
use App\Models\Category;
use App\Models\Contest;
use App\Models\Country;
use App\Models\ExternalLik;
use App\Models\Job;
use App\Models\PersonalLink;
use App\Models\Post;
use App\Models\Student;
use App\Models\StudentEvent;
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
                'exams' => ExternalLik::type(Category::C_EXAMES_PADRONIZADOS)->randomAble(4)->get(),
                'scholarships_grants' => ExternalLik::type(Category::C_BOLSAS_AUXILIOS)->randomAble(4)->get(),
                'statistics_softwares' => ExternalLik::type(Category::C_PROGRAMAS_DE_ESTATISTICAS)->take(5)->randomAble(4)->get(),
                'util_apps' => ExternalLik::type(Category::C_APLICATIVOS_UTEIS)->take(5)->randomAble(4)->get(),
                'high_school_tvs' => ExternalLik::type(Category::C_TV_UNIVERSITARIAS)->randomAble(4)->get(),
                'high_school_radios' => ExternalLik::type(Category::C_RADIOS_UNIVERSITARIAS)->randomAble(4)->get(),
                'events' => StudentEvent::where('creator_id', Auth::user()->id)->randomAble(4)->get(),
                'links' => PersonalLink::where('user_id', Auth::user()->id)->get(),
                'posts' => Post::latest()->take(5)->get(),
                'event_calls' => EventCall::latest()->take(10)->get(),
                'jobs' => Job::with('companyJob')->where('type', Job::TYPE_EMPREGO)->take(5)->get(),
                'jobs_st' => Job::with('companyJob')->whereIn('type', [Job::TYPE_ESTAGIO,Job::TYPE_TRAINEE])->take(5)->get(),
                'contests' => Contest::latest()->take(5)->get(),
                'student' => $user->student
            ]
        );
    }
}
