<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Models\EventCall;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTeacher;
use App\Models\Category;
use App\Models\Company;
use App\Models\Country;
use App\Models\ExternalLik;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\PublishCall;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    use MediaUploadingTrait;

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

    public function getProfile()
    {
        $user = Auth::user();
        $profile = $user->teacher;
        $countries = Country::all();
        return view('frontend.pages.teachers.profile', compact('profile', 'countries'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $teacher = $user->teacher;

        $teacher->update($request->all());

        if ($request->input('logo', false)) {
            if (!$teacher->logo || $request->input('logo') !== $teacher->logo->file_name) {
                if ($teacher->logo) {
                    $teacher->logo->delete();
                }

                $teacher->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($teacher->logo) {
            $teacher->logo->delete();
        }

        return  redirect()->back()->with('success', 'Dados Atualizados!');
    }

    public function home()
    {
        $user = Auth::user();
        return view(
            'frontend.pages.teachers.painel',
            [
                'articles' => ExternalLik::type(Category::C_ARTIGOS)->randomAble(4)->get(),
                'statistics_softwares' => ExternalLik::type(Category::C_PROGRAMAS_DE_ESTATISTICAS)->take(5)->randomAble(4)->get(),
                'util_apps' => ExternalLik::type(Category::C_APLICATIVOS_UTEIS)->take(5)->randomAble(4)->get(),
                'partners_companies' => Company::where('is_partner', true)->randomAble(4)->get(),
                'support_companies' => Company::where('is_supporter', true)->randomAble(4)->get(),
                'sponsorship_companies' => Company::where('is_sponsorship', true)->randomAble(4)->get(),
                'teacher' => $user->teacher ?? false,
                'posts' => Post::active()->latest()->take(5)->get(),
                'foment_calls' => Promotion::latest()->take(5)->get(),
                'publish_calls' => PublishCall::latest()->take(5)->get(),
                'event_calls' => EventCall::latest()->take(10)->get(),
                'foment' => null
            ]
        );
    }
}
