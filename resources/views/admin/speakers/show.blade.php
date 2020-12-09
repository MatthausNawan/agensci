@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.speaker.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.speakers.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $speaker->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $speaker->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.photo') }}
                                    </th>
                                    <td>
                                        @if($speaker->photo)
                                            <a href="{{ $speaker->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $speaker->photo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.creator') }}
                                    </th>
                                    <td>
                                        {{ $speaker->creator->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.bio') }}
                                    </th>
                                    <td>
                                        {!! $speaker->bio !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $speaker->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.speaker.fields.areas') }}
                                    </th>
                                    <td>
                                        {{ $speaker->areas }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.speakers.index') }}">
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