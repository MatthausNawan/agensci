@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.studentProfile.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.student-profiles.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.couse_name') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->couse_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.period') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->period }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.university_name') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->university_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.resume') }}
                                    </th>
                                    <td>
                                        @if($studentProfile->resume)
                                            <a href="{{ $studentProfile->resume->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.lattes_link') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->lattes_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.bio') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->bio }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.photo') }}
                                    </th>
                                    <td>
                                        @if($studentProfile->photo)
                                            <a href="{{ $studentProfile->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $studentProfile->photo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.studentProfile.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $studentProfile->phone }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.student-profiles.index') }}">
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