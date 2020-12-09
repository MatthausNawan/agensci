<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPromotionRequest;
use App\Http\Requests\StorePromotionRequest;
use App\Http\Requests\UpdatePromotionRequest;
use App\Models\Promotion;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PromotionController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('promotion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Promotion::with(['creator'])->select(sprintf('%s.*', (new Promotion)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'promotion_show';
                $editGate      = 'promotion_edit';
                $deleteGate    = 'promotion_delete';
                $crudRoutePart = 'promotions';

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
            $table->editColumn('entity', function ($row) {
                return $row->entity ? $row->entity : "";
            });
            $table->editColumn('edital_link', function ($row) {
                return $row->edital_link ? $row->edital_link : "";
            });
            $table->addColumn('creator_name', function ($row) {
                return $row->creator ? $row->creator->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'creator']);

            return $table->make(true);
        }

        return view('admin.promotions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('promotion_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $creators = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.promotions.create', compact('creators'));
    }

    public function store(StorePromotionRequest $request)
    {
        $promotion = Promotion::create($request->all());

        return redirect()->route('admin.promotions.index');
    }

    public function edit(Promotion $promotion)
    {
        abort_if(Gate::denies('promotion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $creators = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $promotion->load('creator');

        return view('admin.promotions.edit', compact('creators', 'promotion'));
    }

    public function update(UpdatePromotionRequest $request, Promotion $promotion)
    {
        $promotion->update($request->all());

        return redirect()->route('admin.promotions.index');
    }

    public function show(Promotion $promotion)
    {
        abort_if(Gate::denies('promotion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $promotion->load('creator');

        return view('admin.promotions.show', compact('promotion'));
    }

    public function destroy(Promotion $promotion)
    {
        abort_if(Gate::denies('promotion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $promotion->delete();

        return back();
    }

    public function massDestroy(MassDestroyPromotionRequest $request)
    {
        Promotion::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
