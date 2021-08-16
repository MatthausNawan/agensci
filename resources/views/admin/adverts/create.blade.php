@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.advert.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.adverts.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('social_name') ? 'has-error' : '' }}">
                            <label class="required" for="social_name">{{ trans('cruds.advert.fields.social_name') }}</label>
                            <input class="form-control" type="text" name="social_name" id="social_name" value="{{ old('social_name', '') }}" required>
                            @if($errors->has('social_name'))
                                <span class="help-block" role="alert">{{ $errors->first('social_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.social_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('fantasy_name') ? 'has-error' : '' }}">
                            <label for="fantasy_name">{{ trans('cruds.advert.fields.fantasy_name') }}</label>
                            <input class="form-control" type="text" name="fantasy_name" id="fantasy_name" value="{{ old('fantasy_name', '') }}">
                            @if($errors->has('fantasy_name'))
                                <span class="help-block" role="alert">{{ $errors->first('fantasy_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.fantasy_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('social_number') ? 'has-error' : '' }}">
                            <label for="social_number">{{ trans('cruds.advert.fields.social_number') }}</label>
                            <input class="form-control" type="text" name="social_number" id="social_number" value="{{ old('social_number', '') }}">
                            @if($errors->has('social_number'))
                                <span class="help-block" role="alert">{{ $errors->first('social_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.social_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.advert.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                            <label for="mobile">{{ trans('cruds.advert.fields.mobile') }}</label>
                            <input class="form-control" type="text" name="mobile" id="mobile" value="{{ old('mobile', '') }}">
                            @if($errors->has('mobile'))
                                <span class="help-block" role="alert">{{ $errors->first('mobile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.mobile_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                            <label for="zipcode">{{ trans('cruds.advert.fields.zipcode') }}</label>
                            <input class="form-control" type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', '') }}">
                            @if($errors->has('zipcode'))
                                <span class="help-block" role="alert">{{ $errors->first('zipcode') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.zipcode_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label for="state">{{ trans('cruds.advert.fields.state') }}</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{ old('state', '') }}">
                            @if($errors->has('state'))
                                <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_name') ? 'has-error' : '' }}">
                            <label for="contact_name">{{ trans('cruds.advert.fields.contact_name') }}</label>
                            <input class="form-control" type="text" name="contact_name" id="contact_name" value="{{ old('contact_name', '') }}">
                            @if($errors->has('contact_name'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.contact_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_phone') ? 'has-error' : '' }}">
                            <label for="contact_phone">{{ trans('cruds.advert.fields.contact_phone') }}</label>
                            <input class="form-control" type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', '') }}">
                            @if($errors->has('contact_phone'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.contact_phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_mobile') ? 'has-error' : '' }}">
                            <label for="contact_mobile">{{ trans('cruds.advert.fields.contact_mobile') }}</label>
                            <input class="form-control" type="text" name="contact_mobile" id="contact_mobile" value="{{ old('contact_mobile', '') }}">
                            @if($errors->has('contact_mobile'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_mobile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.contact_mobile_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_email') ? 'has-error' : '' }}">
                            <label for="contact_email">{{ trans('cruds.advert.fields.contact_email') }}</label>
                            <input class="form-control" type="email" name="contact_email" id="contact_email" value="{{ old('contact_email') }}">
                            @if($errors->has('contact_email'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.contact_email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('contact_social_number') ? 'has-error' : '' }}">
                            <label for="contact_social_number">{{ trans('cruds.advert.fields.contact_social_number') }}</label>
                            <input class="form-control" type="text" name="contact_social_number" id="contact_social_number" value="{{ old('contact_social_number', '') }}">
                            @if($errors->has('contact_social_number'))
                                <span class="help-block" role="alert">{{ $errors->first('contact_social_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.contact_social_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reach_states') ? 'has-error' : '' }}">
                            <label for="reach_states">{{ trans('cruds.advert.fields.reach_states') }}</label>
                            <textarea class="form-control" name="reach_states" id="reach_states">{{ old('reach_states') }}</textarea>
                            @if($errors->has('reach_states'))
                                <span class="help-block" role="alert">{{ $errors->first('reach_states') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reach_states_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reach_cities') ? 'has-error' : '' }}">
                            <label for="reach_cities">{{ trans('cruds.advert.fields.reach_cities') }}</label>
                            <textarea class="form-control" name="reach_cities" id="reach_cities">{{ old('reach_cities') }}</textarea>
                            @if($errors->has('reach_cities'))
                                <span class="help-block" role="alert">{{ $errors->first('reach_cities') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reach_cities_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reach_categories') ? 'has-error' : '' }}">
                            <label for="reach_categories">{{ trans('cruds.advert.fields.reach_categories') }}</label>
                            <textarea class="form-control" name="reach_categories" id="reach_categories">{{ old('reach_categories') }}</textarea>
                            @if($errors->has('reach_categories'))
                                <span class="help-block" role="alert">{{ $errors->first('reach_categories') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reach_categories_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reach_segments') ? 'has-error' : '' }}">
                            <label for="reach_segments">{{ trans('cruds.advert.fields.reach_segments') }}</label>
                            <textarea class="form-control" name="reach_segments" id="reach_segments">{{ old('reach_segments') }}</textarea>
                            @if($errors->has('reach_segments'))
                                <span class="help-block" role="alert">{{ $errors->first('reach_segments') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reach_segments_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reach_genres') ? 'has-error' : '' }}">
                            <label for="reach_genres">{{ trans('cruds.advert.fields.reach_genres') }}</label>
                            <textarea class="form-control" name="reach_genres" id="reach_genres">{{ old('reach_genres') }}</textarea>
                            @if($errors->has('reach_genres'))
                                <span class="help-block" role="alert">{{ $errors->first('reach_genres') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reach_genres_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('advertising_place') ? 'has-error' : '' }}">
                            <label for="advertising_place_id">{{ trans('cruds.advert.fields.advertising_place') }}</label>
                            <select class="form-control select2" name="advertising_place_id" id="advertising_place_id">
                                @foreach($advertising_places as $id => $entry)
                                    <option value="{{ $id }}" {{ old('advertising_place_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('advertising_place'))
                                <span class="help-block" role="alert">{{ $errors->first('advertising_place') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.advertising_place_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('total_price') ? 'has-error' : '' }}">
                            <label for="total_price">{{ trans('cruds.advert.fields.total_price') }}</label>
                            <input class="form-control" type="number" name="total_price" id="total_price" value="{{ old('total_price', '0') }}" step="0.01">
                            @if($errors->has('total_price'))
                                <span class="help-block" role="alert">{{ $errors->first('total_price') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.total_price_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.advert.fields.status') }}</label>
                            <select class="form-control" name="status" id="status">
                                <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Advert::STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('status', 'CREATED') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('reject_reason') ? 'has-error' : '' }}">
                            <label for="reject_reason">{{ trans('cruds.advert.fields.reject_reason') }}</label>
                            <textarea class="form-control" name="reject_reason" id="reject_reason">{{ old('reject_reason') }}</textarea>
                            @if($errors->has('reject_reason'))
                                <span class="help-block" role="alert">{{ $errors->first('reject_reason') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.reject_reason_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('media_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.advert.fields.media_type') }}</label>
                            <select class="form-control" name="media_type" id="media_type">
                                <option value disabled {{ old('media_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Advert::MEDIA_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('media_type', 'IMAGE') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('media_type'))
                                <span class="help-block" role="alert">{{ $errors->first('media_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.media_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('media_link') ? 'has-error' : '' }}">
                            <label class="required" for="media_link">{{ trans('cruds.advert.fields.media_link') }}</label>
                            <input class="form-control" type="text" name="media_link" id="media_link" value="{{ old('media_link', '') }}" required>
                            @if($errors->has('media_link'))
                                <span class="help-block" role="alert">{{ $errors->first('media_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.media_link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('media_file') ? 'has-error' : '' }}">
                            <label for="media_file">{{ trans('cruds.advert.fields.media_file') }}</label>
                            <input class="form-control" type="text" name="media_file" id="media_file" value="{{ old('media_file', '') }}">
                            @if($errors->has('media_file'))
                                <span class="help-block" role="alert">{{ $errors->first('media_file') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.media_file_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('start_at') ? 'has-error' : '' }}">
                            <label for="start_at">{{ trans('cruds.advert.fields.start_at') }}</label>
                            <input class="form-control date" type="text" name="start_at" id="start_at" value="{{ old('start_at') }}">
                            @if($errors->has('start_at'))
                                <span class="help-block" role="alert">{{ $errors->first('start_at') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.start_at_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('end_at') ? 'has-error' : '' }}">
                            <label for="end_at">{{ trans('cruds.advert.fields.end_at') }}</label>
                            <input class="form-control date" type="text" name="end_at" id="end_at" value="{{ old('end_at') }}">
                            @if($errors->has('end_at'))
                                <span class="help-block" role="alert">{{ $errors->first('end_at') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.end_at_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('enabled') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="enabled" value="0">
                                <input type="checkbox" name="enabled" id="enabled" value="1" {{ old('enabled', 0) == 1 || old('enabled') === null ? 'checked' : '' }}>
                                <label for="enabled" style="font-weight: 400">{{ trans('cruds.advert.fields.enabled') }}</label>
                            </div>
                            @if($errors->has('enabled'))
                                <span class="help-block" role="alert">{{ $errors->first('enabled') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.advert.fields.enabled_helper') }}</span>
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