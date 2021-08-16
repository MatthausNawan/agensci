@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.localAdvertisement.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.local-advertisements.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.localAdvertisement.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('page') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.localAdvertisement.fields.page') }}</label>
                            <select class="form-control" name="page" id="page" required>
                                <option value disabled {{ old('page', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\LocalAdvertisement::PAGE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('page', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('page'))
                                <span class="help-block" role="alert">{{ $errors->first('page') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.page_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                            <label class="required" for="location">{{ trans('cruds.localAdvertisement.fields.location') }}</label>
                            <input class="form-control" type="text" name="location" id="location" value="{{ old('location', '') }}" required>
                            @if($errors->has('location'))
                                <span class="help-block" role="alert">{{ $errors->first('location') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.location_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('country_percent') ? 'has-error' : '' }}">
                            <label for="country_percent">{{ trans('cruds.localAdvertisement.fields.country_percent') }}</label>
                            <input class="form-control" type="number" name="country_percent" id="country_percent" value="{{ old('country_percent', '') }}" step="0.01">
                            @if($errors->has('country_percent'))
                                <span class="help-block" role="alert">{{ $errors->first('country_percent') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.country_percent_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('genre_percent') ? 'has-error' : '' }}">
                            <label for="genre_percent">{{ trans('cruds.localAdvertisement.fields.genre_percent') }}</label>
                            <input class="form-control" type="number" name="genre_percent" id="genre_percent" value="{{ old('genre_percent', '') }}" step="0.01">
                            @if($errors->has('genre_percent'))
                                <span class="help-block" role="alert">{{ $errors->first('genre_percent') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.genre_percent_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('category_percent') ? 'has-error' : '' }}">
                            <label for="category_percent">{{ trans('cruds.localAdvertisement.fields.category_percent') }}</label>
                            <input class="form-control" type="number" name="category_percent" id="category_percent" value="{{ old('category_percent', '0') }}" step="0.00001">
                            @if($errors->has('category_percent'))
                                <span class="help-block" role="alert">{{ $errors->first('category_percent') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.category_percent_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('area_percent') ? 'has-error' : '' }}">
                            <label class="required" for="area_percent">{{ trans('cruds.localAdvertisement.fields.area_percent') }}</label>
                            <input class="form-control" type="number" name="area_percent" id="area_percent" value="{{ old('area_percent', '0') }}" step="0.01" required>
                            @if($errors->has('area_percent'))
                                <span class="help-block" role="alert">{{ $errors->first('area_percent') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.area_percent_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('days_percent') ? 'has-error' : '' }}">
                            <label class="required" for="days_percent">{{ trans('cruds.localAdvertisement.fields.days_percent') }}</label>
                            <input class="form-control" type="number" name="days_percent" id="days_percent" value="{{ old('days_percent', '0') }}" step="0.01" required>
                            @if($errors->has('days_percent'))
                                <span class="help-block" role="alert">{{ $errors->first('days_percent') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.localAdvertisement.fields.days_percent_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection