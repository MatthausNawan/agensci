@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.contest.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.contests.update", [$contest->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">{{ trans('cruds.contest.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $contest->title) }}">
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('occupations') ? 'has-error' : '' }}">
                            <label for="occupations">{{ trans('cruds.contest.fields.occupations') }}</label>
                            <textarea class="form-control" name="occupations" id="occupations">{{ old('occupations', $contest->occupations) }}</textarea>
                            @if($errors->has('occupations'))
                                <span class="help-block" role="alert">{{ $errors->first('occupations') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.occupations_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }}">
                            <label for="salary">{{ trans('cruds.contest.fields.salary') }}</label>
                            <input class="form-control" type="text" name="salary" id="salary" value="{{ old('salary', $contest->salary) }}">
                            @if($errors->has('salary'))
                                <span class="help-block" role="alert">{{ $errors->first('salary') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.salary_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('vacancies') ? 'has-error' : '' }}">
                            <label for="vacancies">{{ trans('cruds.contest.fields.vacancies') }}</label>
                            <input class="form-control" type="number" name="vacancies" id="vacancies" value="{{ old('vacancies', $contest->vacancies) }}" step="1">
                            @if($errors->has('vacancies'))
                                <span class="help-block" role="alert">{{ $errors->first('vacancies') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.vacancies_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('requirements') ? 'has-error' : '' }}">
                            <label for="requirements">{{ trans('cruds.contest.fields.requirements') }}</label>
                            <textarea class="form-control" name="requirements" id="requirements">{{ old('requirements', $contest->requirements) }}</textarea>
                            @if($errors->has('requirements'))
                                <span class="help-block" role="alert">{{ $errors->first('requirements') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.requirements_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                            <label for="link">{{ trans('cruds.contest.fields.link') }}</label>
                            <input class="form-control" type="text" name="link" id="link" value="{{ old('link', $contest->link) }}">
                            @if($errors->has('link'))
                                <span class="help-block" role="alert">{{ $errors->first('link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.contest.fields.link_helper') }}</span>
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