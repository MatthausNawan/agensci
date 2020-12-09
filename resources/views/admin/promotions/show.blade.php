@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.promotion.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.promotions.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $promotion->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.entity') }}
                                    </th>
                                    <td>
                                        {{ $promotion->entity }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.type') }}
                                    </th>
                                    <td>
                                        {{ $promotion->type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.thematic') }}
                                    </th>
                                    <td>
                                        {{ $promotion->thematic }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.resources_amount') }}
                                    </th>
                                    <td>
                                        {{ $promotion->resources_amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.subscription_period') }}
                                    </th>
                                    <td>
                                        {{ $promotion->subscription_period }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.edital_link') }}
                                    </th>
                                    <td>
                                        {{ $promotion->edital_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.promotion.fields.creator') }}
                                    </th>
                                    <td>
                                        {{ $promotion->creator->name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.promotions.index') }}">
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