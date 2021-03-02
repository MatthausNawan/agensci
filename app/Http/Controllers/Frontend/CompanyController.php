<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanies;
use App\Models\Category;
use App\Models\Company;
use App\Models\ExternalLik;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Services\CompanieService;
use Spatie\MediaLibrary\Models\Media;

class CompanyController extends Controller
{
    public function store(StoreCompanies $request)
    {
        $company = Company::create($request->all());

        if ($request->input('logo', false)) {
            $company->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        CompanieService::createUserCompanie($request);

        return  redirect()->back()->with('success', 'Registro inserido com sucesso');
    }

    // Area Administrativa
    public function home()
    {
        return view(
            'frontend.pages.companies.painel',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
            ]
        );

    }
}
