<?php

namespace App\Http\Controllers\Painel\Companies;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCompanies;
use App\Models\Category;
use App\Models\Company;
use App\Models\ExternalLik;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
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
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'company' => $user->company
            ]
        );
    }
}
