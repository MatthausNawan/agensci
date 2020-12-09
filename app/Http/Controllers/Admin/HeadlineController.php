<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHeadlineRequest;
use App\Http\Requests\StoreHeadlineRequest;
use App\Http\Requests\UpdateHeadlineRequest;
use App\Models\Headline;
use App\Models\Segment;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class HeadlineController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('headline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Headline::with(['segment'])->select(sprintf('%s.*', (new Headline)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'headline_show';
                $editGate      = 'headline_edit';
                $deleteGate    = 'headline_delete';
                $crudRoutePart = 'headlines';

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
            $table->editColumn('banner', function ($row) {
                if ($photo = $row->banner) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->addColumn('segment_name', function ($row) {
                return $row->segment ? $row->segment->name : '';
            });

            $table->editColumn('enabled', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->enabled ? 'checked' : null) . '>';
            });
            $table->editColumn('type', function ($row) {
                return $row->type ? Headline::TYPE_SELECT[$row->type] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'banner', 'segment', 'enabled']);

            return $table->make(true);
        }

        return view('admin.headlines.index');
    }

    public function create()
    {
        abort_if(Gate::denies('headline_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $segments = Segment::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.headlines.create', compact('segments'));
    }

    public function store(StoreHeadlineRequest $request)
    {
        $headline = Headline::create($request->all());

        if ($request->input('banner', false)) {
            $headline->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $headline->id]);
        }

        return redirect()->route('admin.headlines.index');
    }

    public function edit(Headline $headline)
    {
        abort_if(Gate::denies('headline_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $segments = Segment::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $headline->load('segment');

        return view('admin.headlines.edit', compact('segments', 'headline'));
    }

    public function update(UpdateHeadlineRequest $request, Headline $headline)
    {
        $headline->update($request->all());

        if ($request->input('banner', false)) {
            if (!$headline->banner || $request->input('banner') !== $headline->banner->file_name) {
                if ($headline->banner) {
                    $headline->banner->delete();
                }

                $headline->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
            }
        } elseif ($headline->banner) {
            $headline->banner->delete();
        }

        return redirect()->route('admin.headlines.index');
    }

    public function show(Headline $headline)
    {
        abort_if(Gate::denies('headline_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headline->load('segment');

        return view('admin.headlines.show', compact('headline'));
    }

    public function destroy(Headline $headline)
    {
        abort_if(Gate::denies('headline_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headline->delete();

        return back();
    }

    public function massDestroy(MassDestroyHeadlineRequest $request)
    {
        Headline::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('headline_create') && Gate::denies('headline_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Headline();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
