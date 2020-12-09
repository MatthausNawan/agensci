@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.externalLik.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.external-liks.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $externalLik->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $externalLik->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.site') }}
                                    </th>
                                    <td>
                                        {{ $externalLik->site }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.enabled') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $externalLik->enabled ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.category') }}
                                    </th>
                                    <td>
                                        {{ $externalLik->category->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.externalLik.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($externalLik->logo)
                                            <a href="{{ $externalLik->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $externalLik->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.external-liks.index') }}">
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