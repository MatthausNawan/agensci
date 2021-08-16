<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventCallRequest;
use App\Http\Requests\StoreEventCallRequest;
use App\Http\Requests\UpdateEventCallRequest;
use App\Models\Event;
use App\Models\EventCall;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EventCallController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('event_call_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EventCall::with(['event'])->select(sprintf('%s.*', (new EventCall())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'event_call_show';
                $editGate = 'event_call_edit';
                $deleteGate = 'event_call_delete';
                $crudRoutePart = 'event-calls';

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
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('media_type', function ($row) {
                return $row->media_type ? EventCall::MEDIA_TYPE_SELECT[$row->media_type] : '';
            });
            $table->addColumn('event_title', function ($row) {
                return $row->event ? $row->event->title : '';
            });

            $table->editColumn('creator', function ($row) {
                return $row->creator ? $row->creator : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'event']);

            return $table->make(true);
        }

        return view('admin.eventCalls.index');
    }

    public function create()
    {
        abort_if(Gate::denies('event_call_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.eventCalls.create', compact('events'));
    }

    public function store(StoreEventCallRequest $request)
    {
        $eventCall = EventCall::create($request->all());

        return redirect()->route('admin.event-calls.index');
    }

    public function edit(EventCall $eventCall)
    {
        abort_if(Gate::denies('event_call_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $eventCall->load('event');

        return view('admin.eventCalls.edit', compact('events', 'eventCall'));
    }

    public function update(UpdateEventCallRequest $request, EventCall $eventCall)
    {
        $eventCall->update($request->all());

        return redirect()->route('admin.event-calls.index');
    }

    public function show(EventCall $eventCall)
    {
        abort_if(Gate::denies('event_call_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventCall->load('event');

        return view('admin.eventCalls.show', compact('eventCall'));
    }

    public function destroy(EventCall $eventCall)
    {
        abort_if(Gate::denies('event_call_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventCall->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventCallRequest $request)
    {
        EventCall::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
