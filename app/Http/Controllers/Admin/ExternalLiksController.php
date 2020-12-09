<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExternalLikRequest;
use App\Http\Requests\StoreExternalLikRequest;
use App\Http\Requests\UpdateExternalLikRequest;
use App\Models\Category;
use App\Models\ExternalLik;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ExternalLiksController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('external_lik_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ExternalLik::with(['category'])->select(sprintf('%s.*', (new ExternalLik)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'external_lik_show';
                $editGate      = 'external_lik_edit';
                $deleteGate    = 'external_lik_delete';
                $crudRoutePart = 'external-liks';

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
            $table->editColumn('site', function ($row) {
                return $row->site ? $row->site : "";
            });
            $table->editColumn('enabled', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->enabled ? 'checked' : null) . '>';
            });
            $table->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '';
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

            $table->rawColumns(['actions', 'placeholder', 'enabled', 'category', 'logo']);

            return $table->make(true);
        }

        return view('admin.externalLiks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('external_lik_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.externalLiks.create', compact('categories'));
    }

    public function store(StoreExternalLikRequest $request)
    {
        $externalLik = ExternalLik::create($request->all());

        if ($request->input('logo', false)) {
            $externalLik->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $externalLik->id]);
        }

        return redirect()->route('admin.external-liks.index');
    }

    public function edit(ExternalLik $externalLik)
    {
        abort_if(Gate::denies('external_lik_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $externalLik->load('category');

        return view('admin.externalLiks.edit', compact('categories', 'externalLik'));
    }

    public function update(UpdateExternalLikRequest $request, ExternalLik $externalLik)
    {
        $externalLik->update($request->all());

        if ($request->input('logo', false)) {
            if (!$externalLik->logo || $request->input('logo') !== $externalLik->logo->file_name) {
                if ($externalLik->logo) {
                    $externalLik->logo->delete();
                }

                $externalLik->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($externalLik->logo) {
            $externalLik->logo->delete();
        }

        return redirect()->route('admin.external-liks.index');
    }

    public function show(ExternalLik $externalLik)
    {
        abort_if(Gate::denies('external_lik_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $externalLik->load('category');

        return view('admin.externalLiks.show', compact('externalLik'));
    }

    public function destroy(ExternalLik $externalLik)
    {
        abort_if(Gate::denies('external_lik_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $externalLik->delete();

        return back();
    }

    public function massDestroy(MassDestroyExternalLikRequest $request)
    {
        ExternalLik::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('external_lik_create') && Gate::denies('external_lik_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ExternalLik();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
