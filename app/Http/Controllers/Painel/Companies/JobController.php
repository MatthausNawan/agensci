<?php

namespace App\Http\Controllers\Painel\Companies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\JobStoreRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Job;
use App\Models\Segment;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with(['companies', 'segment', 'creator'])
            ->where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.companies.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $segments = Segment::all();

        return view('frontend.pages.companies.jobs.create', compact('segments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request)
    {
        $data = $request->all();
        $data['company_id'] = Auth::user()->company->id;
        $data['creator_id'] = Auth::user()->id;
        $data['company'] = Auth::user()->company->name;
        $data['area'] = "teste";

        Job::create($data);

        return redirect()->route('companies.jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::with(['companies', 'segment', 'creator'])->whereId($id)->first();

        $segments = Segment::all();
        $companies = Company::all();

        return view('frontend.pages.companies.jobs.edit', compact('job', 'segments', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['company_id'] = Auth::user()->company->id;
        $data['creator_id'] = Auth::user()->id;

        Job::find($id)->update($data);

        return redirect()->route('companies.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect()->route('companies.jobs.index');
    }

    public function fetchJobType($type)
    {
        switch ($type) {
            case 'estagio':
                return 'Estágio';
                break;

            case 'trainee':
                return 'Trainee';
                break;

            case 'emprego':
                return 'Emprego';
                break;

            default:
                return 'Estágio';
                break;
        }
    }
}
