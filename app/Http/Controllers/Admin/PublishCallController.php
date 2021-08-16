<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPublishCallRequest;
use App\Http\Requests\StorePublishCallRequest;
use App\Http\Requests\UpdatePublishCallRequest;
use App\Models\PublishCall;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PublishCallController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('publish_call_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PublishCall::query()->select(sprintf('%s.*', (new PublishCall())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'publish_call_show';
                $editGate = 'publish_call_edit';
                $deleteGate = 'publish_call_delete';
                $crudRoutePart = 'publish-calls';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('magazine', function ($row) {
                return $row->magazine ? $row->magazine : '';
            });
            $table->editColumn('issn', function ($row) {
                return $row->issn ? $row->issn : '';
            });
            $table->editColumn('qualis', function ($row) {
                return $row->qualis ? $row->qualis : '';
            });
            $table->editColumn('frequency', function ($row) {
                return $row->frequency ? $row->frequency : '';
            });
            $table->editColumn('dossie', function ($row) {
                return $row->dossie ? $row->dossie : '';
            });
            $table->editColumn('theme', function ($row) {
                return $row->theme ? $row->theme : '';
            });
            $table->editColumn('organizatin', function ($row) {
                return $row->organizatin ? $row->organizatin : '';
            });
            $table->editColumn('submission_period', function ($row) {
                return $row->submission_period ? $row->submission_period : '';
            });
            $table->editColumn('link', function ($row) {
                return $row->link ? $row->link : '';
            });
            $table->editColumn('is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_active ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'is_active']);

            return $table->make(true);
        }

        return view('admin.publishCalls.index');
    }

    public function create()
    {
        abort_if(Gate::denies('publish_call_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.publishCalls.create');
    }

    public function store(StorePublishCallRequest $request)
    {
        $publishCall = PublishCall::create($request->all());

        return redirect()->route('admin.publish-calls.index');
    }

    public function edit(PublishCall $publishCall)
    {
        abort_if(Gate::denies('publish_call_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.publishCalls.edit', compact('publishCall'));
    }

    public function update(UpdatePublishCallRequest $request, PublishCall $publishCall)
    {
        $publishCall->update($request->all());

        return redirect()->route('admin.publish-calls.index');
    }

    public function destroy(PublishCall $publishCall)
    {
        abort_if(Gate::denies('publish_call_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $publishCall->delete();

        return back();
    }

    public function massDestroy(MassDestroyPublishCallRequest $request)
    {
        PublishCall::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
