@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.job.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $job->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.company') }}
                                    </th>
                                    <td>
                                        {{ $job->company }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.area') }}
                                    </th>
                                    <td>
                                        {{ $job->area }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Job::TYPE_SELECT[$job->type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.formation') }}
                                    </th>
                                    <td>
                                        {{ $job->formation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.profile') }}
                                    </th>
                                    <td>
                                        {{ $job->profile }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $job->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.ocuppation') }}
                                    </th>
                                    <td>
                                        {{ $job->ocuppation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.qty_jobs') }}
                                    </th>
                                    <td>
                                        {{ $job->qty_jobs }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.salary') }}
                                    </th>
                                    <td>
                                        {{ $job->salary }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.expiration_date') }}
                                    </th>
                                    <td>
                                        {{ $job->expiration_date }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
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