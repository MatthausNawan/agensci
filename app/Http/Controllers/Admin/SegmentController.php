<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySegmentRequest;
use App\Http\Requests\StoreSegmentRequest;
use App\Http\Requests\UpdateSegmentRequest;
use App\Models\Segment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SegmentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('segment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $segments = Segment::all();

        return view('admin.segments.index', compact('segments'));
    }

    public function create()
    {
        abort_if(Gate::denies('segment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.segments.create');
    }

    public function store(StoreSegmentRequest $request)
    {
        $segment = Segment::create($request->all());

        return redirect()->route('admin.segments.index');
    }

    public function edit(Segment $segment)
    {
        abort_if(Gate::denies('segment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.segments.edit', compact('segment'));
    }

    public function update(UpdateSegmentRequest $request, Segment $segment)
    {
        $segment->update($request->all());

        return redirect()->route('admin.segments.index');
    }

    public function show(Segment $segment)
    {
        abort_if(Gate::denies('segment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.segments.show', compact('segment'));
    }

    public function destroy(Segment $segment)
    {
        abort_if(Gate::denies('segment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $segment->delete();

        return back();
    }

    public function massDestroy(MassDestroySegmentRequest $request)
    {
        Segment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
