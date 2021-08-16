@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.eventCall.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.event-calls.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">{{ trans('cruds.eventCall.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}">
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventCall.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('media') ? 'has-error' : '' }}">
                            <label for="media">{{ trans('cruds.eventCall.fields.media') }}</label>
                            <textarea class="form-control" name="media" id="media">{{ old('media') }}</textarea>
                            @if($errors->has('media'))
                                <span class="help-block" role="alert">{{ $errors->first('media') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventCall.fields.media_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('media_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.eventCall.fields.media_type') }}</label>
                            <select class="form-control" name="media_type" id="media_type">
                                <option value disabled {{ old('media_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\EventCall::MEDIA_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('media_type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('media_type'))
                                <span class="help-block" role="alert">{{ $errors->first('media_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventCall.fields.media_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('event') ? 'has-error' : '' }}">
                            <label for="event_id">{{ trans('cruds.eventCall.fields.event') }}</label>
                            <select class="form-control select2" name="event_id" id="event_id">
                                @foreach($events as $id => $entry)
                                    <option value="{{ $id }}" {{ old('event_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('event'))
                                <span class="help-block" role="alert">{{ $errors->first('event') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventCall.fields.event_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('creator') ? 'has-error' : '' }}">
                            <label for="creator">{{ trans('cruds.eventCall.fields.creator') }}</label>
                            <input class="form-control" type="number" name="creator" id="creator" value="{{ old('creator', '0') }}" step="1">
                            @if($errors->has('creator'))
                                <span class="help-block" role="alert">{{ $errors->first('creator') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.eventCall.fields.creator_helper') }}</span>
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