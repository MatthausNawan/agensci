@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.publishCall.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.publish-calls.update", [$publishCall->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('magazine') ? 'has-error' : '' }}">
                            <label for="magazine">{{ trans('cruds.publishCall.fields.magazine') }}</label>
                            <input class="form-control" type="text" name="magazine" id="magazine" value="{{ old('magazine', $publishCall->magazine) }}">
                            @if($errors->has('magazine'))
                                <span class="help-block" role="alert">{{ $errors->first('magazine') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.magazine_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('issn') ? 'has-error' : '' }}">
                            <label for="issn">{{ trans('cruds.publishCall.fields.issn') }}</label>
                            <input class="form-control" type="text" name="issn" id="issn" value="{{ old('issn', $publishCall->issn) }}">
                            @if($errors->has('issn'))
                                <span class="help-block" role="alert">{{ $errors->first('issn') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.issn_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('qualis') ? 'has-error' : '' }}">
                            <label for="qualis">{{ trans('cruds.publishCall.fields.qualis') }}</label>
                            <input class="form-control" type="text" name="qualis" id="qualis" value="{{ old('qualis', $publishCall->qualis) }}">
                            @if($errors->has('qualis'))
                                <span class="help-block" role="alert">{{ $errors->first('qualis') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.qualis_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('frequency') ? 'has-error' : '' }}">
                            <label for="frequency">{{ trans('cruds.publishCall.fields.frequency') }}</label>
                            <input class="form-control" type="text" name="frequency" id="frequency" value="{{ old('frequency', $publishCall->frequency) }}">
                            @if($errors->has('frequency'))
                                <span class="help-block" role="alert">{{ $errors->first('frequency') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.frequency_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('dossie') ? 'has-error' : '' }}">
                            <label for="dossie">{{ trans('cruds.publishCall.fields.dossie') }}</label>
                            <textarea class="form-control" name="dossie" id="dossie">{{ old('dossie', $publishCall->dossie) }}</textarea>
                            @if($errors->has('dossie'))
                                <span class="help-block" role="alert">{{ $errors->first('dossie') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.dossie_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('theme') ? 'has-error' : '' }}">
                            <label for="theme">{{ trans('cruds.publishCall.fields.theme') }}</label>
                            <textarea class="form-control" name="theme" id="theme">{{ old('theme', $publishCall->theme) }}</textarea>
                            @if($errors->has('theme'))
                                <span class="help-block" role="alert">{{ $errors->first('theme') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.theme_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('organizatin') ? 'has-error' : '' }}">
                            <label for="organizatin">{{ trans('cruds.publishCall.fields.organizatin') }}</label>
                            <input class="form-control" type="text" name="organizatin" id="organizatin" value="{{ old('organizatin', $publishCall->organizatin) }}">
                            @if($errors->has('organizatin'))
                                <span class="help-block" role="alert">{{ $errors->first('organizatin') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.organizatin_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('submission_period') ? 'has-error' : '' }}">
                            <label for="submission_period">{{ trans('cruds.publishCall.fields.submission_period') }}</label>
                            <input class="form-control" type="text" name="submission_period" id="submission_period" value="{{ old('submission_period', $publishCall->submission_period) }}">
                            @if($errors->has('submission_period'))
                                <span class="help-block" role="alert">{{ $errors->first('submission_period') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.submission_period_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                            <label for="link">{{ trans('cruds.publishCall.fields.link') }}</label>
                            <input class="form-control" type="text" name="link" id="link" value="{{ old('link', $publishCall->link) }}">
                            @if($errors->has('link'))
                                <span class="help-block" role="alert">{{ $errors->first('link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" id="is_active" value="1" {{ $publishCall->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                                <label for="is_active" style="font-weight: 400">{{ trans('cruds.publishCall.fields.is_active') }}</label>
                            </div>
                            @if($errors->has('is_active'))
                                <span class="help-block" role="alert">{{ $errors->first('is_active') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.publishCall.fields.is_active_helper') }}</span>
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