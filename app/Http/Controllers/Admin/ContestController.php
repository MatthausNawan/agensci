<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContestRequest;
use App\Http\Requests\StoreContestRequest;
use App\Http\Requests\UpdateContestRequest;
use App\Models\Contest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ContestController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('contest_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Contest::query()->select(sprintf('%s.*', (new Contest)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'contest_show';
                $editGate      = 'contest_edit';
                $deleteGate    = 'contest_delete';
                $crudRoutePart = 'contests';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : "";
            });
            $table->editColumn('occupations', function ($row) {
                return $row->occupations ? $row->occupations : "";
            });
            $table->editColumn('salary', function ($row) {
                return $row->salary ? $row->salary : "";
            });
            $table->editColumn('vacancies', function ($row) {
                return $row->vacancies ? $row->vacancies : "";
            });
            $table->editColumn('link', function ($row) {
                return $row->link ? $row->link : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.contests.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contest_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contests.create');
    }

    public function store(StoreContestRequest $request)
    {
        $contest = Contest::create($request->all());

        return redirect()->route('admin.contests.index');
    }

    public function edit(Contest $contest)
    {
        abort_if(Gate::denies('contest_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contests.edit', compact('contest'));
    }

    public function update(UpdateContestRequest $request, Contest $contest)
    {
        $contest->update($request->all());

        return redirect()->route('admin.contests.index');
    }

    public function show(Contest $contest)
    {
        abort_if(Gate::denies('contest_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contests.show', compact('contest'));
    }

    public function destroy(Contest $contest)
    {
        abort_if(Gate::denies('contest_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contest->delete();

        return back();
    }

    public function massDestroy(MassDestroyContestRequest $request)
    {
        Contest::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
