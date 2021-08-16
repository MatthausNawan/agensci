<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAdvertRequest;
use App\Http\Requests\StoreAdvertRequest;
use App\Http\Requests\UpdateAdvertRequest;
use App\Models\Advert;
use App\Models\LocalAdvertisement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdvertsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('advert_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adverts = Advert::with(['advertising_place'])->get();

        $local_advertisements = LocalAdvertisement::get();

        return view('admin.adverts.index', compact('adverts', 'local_advertisements'));
    }

    public function create()
    {
        abort_if(Gate::denies('advert_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertising_places = LocalAdvertisement::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.adverts.create', compact('advertising_places'));
    }

    public function store(StoreAdvertRequest $request)
    {
        $advert = Advert::create($request->all());

        return redirect()->route('admin.adverts.index');
    }

    public function edit(Advert $advert)
    {
        abort_if(Gate::denies('advert_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertising_places = LocalAdvertisement::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advert->load('advertising_place');

        return view('admin.adverts.edit', compact('advertising_places', 'advert'));
    }

    public function update(UpdateAdvertRequest $request, Advert $advert)
    {
        $advert->update($request->all());

        return redirect()->route('admin.adverts.index');
    }

    public function show(Advert $advert)
    {
        abort_if(Gate::denies('advert_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advert->load('advertising_place');

        return view('admin.adverts.show', compact('advert'));
    }

    public function destroy(Advert $advert)
    {
        abort_if(Gate::denies('advert_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advert->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdvertRequest $request)
    {
        Advert::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
