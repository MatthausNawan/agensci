@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.eventCall.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.event-calls.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $eventCall->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $eventCall->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.media') }}
                                    </th>
                                    <td>
                                        {{ $eventCall->media }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.media_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\EventCall::MEDIA_TYPE_SELECT[$eventCall->media_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.event') }}
                                    </th>
                                    <td>
                                        {{ $eventCall->event->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.eventCall.fields.creator') }}
                                    </th>
                                    <td>
                                        {{ $eventCall->creator }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.event-calls.index') }}">
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