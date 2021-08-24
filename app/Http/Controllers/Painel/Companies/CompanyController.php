<?php

namespace App\Http\Controllers\Painel\Companies;

use App\Models\EventCall;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCompanies;
use App\Models\Category;
use App\Models\Company;
use App\Models\Event;
use App\Models\ExternalLik;
use App\Models\Job;
use App\Models\PersonalLink;
use Illuminate\Http\Request;
use App\Models\StudentProfile;
use App\Services\CompanieService;
use Spatie\MediaLibrary\Models\Media;
use Gate;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    use MediaUploadingTrait;

    public function __construct()
    {
        $this->middleware('check-panel');
    }

    public function showRegisterCompaniesPage()
    {
        return view('frontend.pages.companies.register', []);
    }

    public function showLoginCompaniesPage()
    {
        return view('frontend.pages.companies.login');
    }

    public function store(StoreCompanies $request)
    {
        $company = Company::create($request->all());

        if ($request->input('logo', false)) {
            $company->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        CompanieService::createUserCompanie($request, $company);

        return  redirect()->route('site.static.success-register')->with('success', 'Registro inserido com sucesso');
    }

    public function home()
    {
        $user = Auth::user();
        return view(
            'frontend.pages.companies.painel',
            [
                'links' => PersonalLink::where('user_id', Auth::user()->id)->get(),
                'jobs' => Job::where('creator_id', Auth::user()->id)->where('type', Job::TYPE_EMPREGO)->take(4)->get(),
                'stages' => Job::where('creator_id', Auth::user()->id)->where('type', Job::TYPE_ESTAGIO)->take(4)->get(),
                'trainees' => Job::where('creator_id', Auth::user()->id)->where('type', Job::TYPE_TRAINEE)->take(4)->get(),
                'events' => Event::randomAble(4)->get(),
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'students_profiles' => StudentProfile::all(),
                'event_calls' => EventCall::latest()->take(10)->get(),
                'company' => $user->company
            ]
        );
    }

    public function getProfile()
    {
        $user = Auth::user();
        $profile = $user->company;

        return view('frontend.pages.companies.profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $company = $user->company;
       
        $company->update($request->all());
       

        if ($request->input('logo', false)) {
            if (!$company->logo || $request->input('logo') !== $company->logo->file_name) {
                if ($company->logo) {
                    $company->logo->delete();
                }

                $company->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($company->logo) {
            $company->logo->delete();
        }

        return  redirect()->back()->with('success', 'Dados Atualizados!');
    }

    public function showCollaborationPage()
    {
        $user = Auth::user();
        $profile = $user->company;
        return view('frontend.pages.companies.collaborator.create', compact('profile'));
    }

    public function updateCollaborationPreferences(Request $request)
    {
        $user = Auth::user();
        $profile = $user->company;
        $profile->update($request->all());

        return view('frontend.pages.companies.collaborator.create', compact('profile'));
    }
}
