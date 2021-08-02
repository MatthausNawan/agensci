<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Magazine;
use App\Models\Segment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MagazineController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('magazine_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Magazine::with(['segment'])->select(sprintf('%s.*', (new Magazine)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'magazine_show';
                $editGate      = 'magazine_edit';
                $deleteGate    = 'magazine_delete';
                $crudRoutePart = 'magazines';

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

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });

            $table->addColumn('segment_name', function ($row) {
                return $row->segment ? $row->segment->name : '';
            });

            $table->editColumn('logo', function ($row) {
                if ($photo = $row->logo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder','segment','logo']);

            return $table->make(true);
        }

        return view('admin.magazines.index');
    }

    public function create()
    {
        abort_if(Gate::denies('magazine_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $segments = Segment::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.magazines.create', compact('segments'));
    }

    public function store(Request $request)
    {
        $magazine = Magazine::create($request->all());

        if ($request->input('logo', false)) {
            $magazine->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        return redirect()->route('admin.magazines.index');
    }

    public function edit(Magazine $magazine)
    {
        abort_if(Gate::denies('magazine_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $segments = Segment::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $magazine->load('segment');
        return view('admin.magazines.edit', compact('magazine', 'segments'));
    }

    public function update(Request $request, Magazine $magazine)
    {
        $magazine->update($request->all());

        if ($request->input('logo', false)) {
            if (!$magazine->logo || $request->input('logo') !== $magazine->logo->file_name) {
                if ($magazine->logo) {
                    $magazine->logo->delete();
                }

                $magazine->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($magazine->logo) {
            $magazine->logo->delete();
        }

        return redirect()->route('admin.magazines.index');
    }

    public function show(Magazine $magazine)
    {
        abort_if(Gate::denies('magazine_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.magazines.show', compact('magazine'));
    }

    public function destroy(Magazine $magazine)
    {
        abort_if(Gate::denies('magazine_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $magazine->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Magazine::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
