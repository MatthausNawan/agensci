@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.publishCall.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.publish-calls.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.magazine') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->magazine }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.issn') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->issn }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.qualis') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->qualis }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.frequency') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->frequency }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.dossie') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->dossie }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.theme') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->theme }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.organizatin') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->organizatin }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.submission_period') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->submission_period }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.link') }}
                                    </th>
                                    <td>
                                        {{ $publishCall->link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.publishCall.fields.is_active') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $publishCall->is_active ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.publish-calls.index') }}">
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