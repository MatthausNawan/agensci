@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.advert.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.adverts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $advert->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.social_name') }}
                                    </th>
                                    <td>
                                        {{ $advert->social_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.fantasy_name') }}
                                    </th>
                                    <td>
                                        {{ $advert->fantasy_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.social_number') }}
                                    </th>
                                    <td>
                                        {{ $advert->social_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $advert->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.mobile') }}
                                    </th>
                                    <td>
                                        {{ $advert->mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.zipcode') }}
                                    </th>
                                    <td>
                                        {{ $advert->zipcode }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.state') }}
                                    </th>
                                    <td>
                                        {{ $advert->state }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.contact_name') }}
                                    </th>
                                    <td>
                                        {{ $advert->contact_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.contact_phone') }}
                                    </th>
                                    <td>
                                        {{ $advert->contact_phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.contact_mobile') }}
                                    </th>
                                    <td>
                                        {{ $advert->contact_mobile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.contact_email') }}
                                    </th>
                                    <td>
                                        {{ $advert->contact_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.contact_social_number') }}
                                    </th>
                                    <td>
                                        {{ $advert->contact_social_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reach_states') }}
                                    </th>
                                    <td>
                                        {{ $advert->reach_states }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reach_cities') }}
                                    </th>
                                    <td>
                                        {{ $advert->reach_cities }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reach_categories') }}
                                    </th>
                                    <td>
                                        {{ $advert->reach_categories }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reach_segments') }}
                                    </th>
                                    <td>
                                        {{ $advert->reach_segments }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reach_genres') }}
                                    </th>
                                    <td>
                                        {{ $advert->reach_genres }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.advertising_place') }}
                                    </th>
                                    <td>
                                        {{ $advert->advertising_place->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.total_price') }}
                                    </th>
                                    <td>
                                        {{ $advert->total_price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Advert::STATUS_SELECT[$advert->status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.reject_reason') }}
                                    </th>
                                    <td>
                                        {{ $advert->reject_reason }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.media_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Advert::MEDIA_TYPE_SELECT[$advert->media_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.media_link') }}
                                    </th>
                                    <td>
                                        {{ $advert->media_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.media_file') }}
                                    </th>
                                    <td>
                                        {{ $advert->media_file }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.start_at') }}
                                    </th>
                                    <td>
                                        {{ $advert->start_at }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.end_at') }}
                                    </th>
                                    <td>
                                        {{ $advert->end_at }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.advert.fields.enabled') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $advert->enabled ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.adverts.index') }}">
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