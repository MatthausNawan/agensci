@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.localAdvertisement.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.local-advertisements.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.page') }}
                                    </th>
                                    <td>
                                        {{ App\Models\LocalAdvertisement::PAGE_SELECT[$localAdvertisement->page] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.location') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->location }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.country_percent') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->country_percent }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.genre_percent') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->genre_percent }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.category_percent') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->category_percent }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.area_percent') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->area_percent }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.localAdvertisement.fields.days_percent') }}
                                    </th>
                                    <td>
                                        {{ $localAdvertisement->days_percent }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.local-advertisements.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection