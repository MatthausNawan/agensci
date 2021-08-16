<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLocalAdvertisementRequest;
use App\Http\Requests\StoreLocalAdvertisementRequest;
use App\Http\Requests\UpdateLocalAdvertisementRequest;
use App\Models\LocalAdvertisement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LocalAdvertisementController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('local_advertisement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LocalAdvertisement::query()->select(sprintf('%s.*', (new LocalAdvertisement())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'local_advertisement_show';
                $editGate = 'local_advertisement_edit';
                $deleteGate = 'local_advertisement_delete';
                $crudRoutePart = 'local-advertisements';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('page', function ($row) {
                return $row->page ? LocalAdvertisement::PAGE_SELECT[$row->page] : '';
            });
            $table->editColumn('location', function ($row) {
                return $row->location ? $row->location : '';
            });
            $table->editColumn('country_percent', function ($row) {
                return $row->country_percent ? $row->country_percent : '';
            });
            $table->editColumn('genre_percent', function ($row) {
                return $row->genre_percent ? $row->genre_percent : '';
            });
            $table->editColumn('category_percent', function ($row) {
                return $row->category_percent ? $row->category_percent : '';
            });
            $table->editColumn('area_percent', function ($row) {
                return $row->area_percent ? $row->area_percent : '';
            });
            $table->editColumn('days_percent', function ($row) {
                return $row->days_percent ? $row->days_percent : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.localAdvertisements.index');
    }

    public function create()
    {
        abort_if(Gate::denies('local_advertisement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.localAdvertisements.create');
    }

    public function store(StoreLocalAdvertisementRequest $request)
    {
        $localAdvertisement = LocalAdvertisement::create($request->all());

        return redirect()->route('admin.local-advertisements.index');
    }

    public function edit(LocalAdvertisement $localAdvertisement)
    {
        abort_if(Gate::denies('local_advertisement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.localAdvertisements.edit', compact('localAdvertisement'));
    }

    public function update(UpdateLocalAdvertisementRequest $request, LocalAdvertisement $localAdvertisement)
    {
        $localAdvertisement->update($request->all());

        return redirect()->route('admin.local-advertisements.index');
    }

    public function show(LocalAdvertisement $localAdvertisement)
    {
        abort_if(Gate::denies('local_advertisement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.localAdvertisements.show', compact('localAdvertisement'));
    }

    public function destroy(LocalAdvertisement $localAdvertisement)
    {
        abort_if(Gate::denies('local_advertisement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $localAdvertisement->delete();

        return back();
    }

    public function massDestroy(MassDestroyLocalAdvertisementRequest $request)
    {
        LocalAdvertisement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
