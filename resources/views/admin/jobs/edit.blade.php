@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.jobs.update", [$job->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                            <label for="company">{{ trans('cruds.job.fields.company') }}</label>
                            <input class="form-control" type="text" name="company" id="company" value="{{ old('company', $job->company) }}">
                            @if($errors->has('company'))
                                <span class="help-block" role="alert">{{ $errors->first('company') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.company_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
                            <label for="area">{{ trans('cruds.job.fields.area') }}</label>
                            <input class="form-control" type="text" name="area" id="area" value="{{ old('area', $job->area) }}">
                            @if($errors->has('area'))
                                <span class="help-block" role="alert">{{ $errors->first('area') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.area_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.job.fields.type') }}</label>
                            <select class="form-control" name="type" id="type">
                                <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Job::TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('type', $job->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type'))
                                <span class="help-block" role="alert">{{ $errors->first('type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('formation') ? 'has-error' : '' }}">
                            <label for="formation">{{ trans('cruds.job.fields.formation') }}</label>
                            <input class="form-control" type="text" name="formation" id="formation" value="{{ old('formation', $job->formation) }}">
                            @if($errors->has('formation'))
                                <span class="help-block" role="alert">{{ $errors->first('formation') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.formation_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('profile') ? 'has-error' : '' }}">
                            <label for="profile">{{ trans('cruds.job.fields.profile') }}</label>
                            <textarea class="form-control" name="profile" id="profile">{{ old('profile', $job->profile) }}</textarea>
                            @if($errors->has('profile'))
                                <span class="help-block" role="alert">{{ $errors->first('profile') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.profile_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address">{{ trans('cruds.job.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $job->address) }}">
                            @if($errors->has('address'))
                                <span class="help-block" role="alert">{{ $errors->first('address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ocuppation') ? 'has-error' : '' }}">
                            <label for="ocuppation">{{ trans('cruds.job.fields.ocuppation') }}</label>
                            <input class="form-control" type="text" name="ocuppation" id="ocuppation" value="{{ old('ocuppation', $job->ocuppation) }}">
                            @if($errors->has('ocuppation'))
                                <span class="help-block" role="alert">{{ $errors->first('ocuppation') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.ocuppation_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('qty_jobs') ? 'has-error' : '' }}">
                            <label for="qty_jobs">{{ trans('cruds.job.fields.qty_jobs') }}</label>
                            <input class="form-control" type="number" name="qty_jobs" id="qty_jobs" value="{{ old('qty_jobs', $job->qty_jobs) }}" step="1">
                            @if($errors->has('qty_jobs'))
                                <span class="help-block" role="alert">{{ $errors->first('qty_jobs') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.qty_jobs_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }}">
                            <label for="salary">{{ trans('cruds.job.fields.salary') }}</label>
                            <input class="form-control" type="number" name="salary" id="salary" value="{{ old('salary', $job->salary) }}" step="0.01">
                            @if($errors->has('salary'))
                                <span class="help-block" role="alert">{{ $errors->first('salary') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.salary_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('expiration_date') ? 'has-error' : '' }}">
                            <label for="expiration_date">{{ trans('cruds.job.fields.expiration_date') }}</label>
                            <input class="form-control datetime" type="text" name="expiration_date" id="expiration_date" value="{{ old('expiration_date', $job->expiration_date) }}">
                            @if($errors->has('expiration_date'))
                                <span class="help-block" role="alert">{{ $errors->first('expiration_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.expiration_date_helper') }}</span>
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