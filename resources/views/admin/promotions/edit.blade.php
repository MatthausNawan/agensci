@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.promotion.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.promotions.update", [$promotion->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('entity') ? 'has-error' : '' }}">
                            <label for="entity">{{ trans('cruds.promotion.fields.entity') }}</label>
                            <input class="form-control" type="text" name="entity" id="entity" value="{{ old('entity', $promotion->entity) }}">
                            @if($errors->has('entity'))
                                <span class="help-block" role="alert">{{ $errors->first('entity') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.entity_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                            <label for="type">{{ trans('cruds.promotion.fields.type') }}</label>
                            <textarea class="form-control" name="type" id="type">{{ old('type', $promotion->type) }}</textarea>
                            @if($errors->has('type'))
                                <span class="help-block" role="alert">{{ $errors->first('type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('thematic') ? 'has-error' : '' }}">
                            <label for="thematic">{{ trans('cruds.promotion.fields.thematic') }}</label>
                            <textarea class="form-control" name="thematic" id="thematic">{{ old('thematic', $promotion->thematic) }}</textarea>
                            @if($errors->has('thematic'))
                                <span class="help-block" role="alert">{{ $errors->first('thematic') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.thematic_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('resources_amount') ? 'has-error' : '' }}">
                            <label for="resources_amount">{{ trans('cruds.promotion.fields.resources_amount') }}</label>
                            <input class="form-control" type="number" name="resources_amount" id="resources_amount" value="{{ old('resources_amount', $promotion->resources_amount) }}" step="0.01">
                            @if($errors->has('resources_amount'))
                                <span class="help-block" role="alert">{{ $errors->first('resources_amount') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.resources_amount_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('subscription_period') ? 'has-error' : '' }}">
                            <label for="subscription_period">{{ trans('cruds.promotion.fields.subscription_period') }}</label>
                            <input class="form-control" type="text" name="subscription_period" id="subscription_period" value="{{ old('subscription_period', $promotion->subscription_period) }}">
                            @if($errors->has('subscription_period'))
                                <span class="help-block" role="alert">{{ $errors->first('subscription_period') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.subscription_period_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('edital_link') ? 'has-error' : '' }}">
                            <label for="edital_link">{{ trans('cruds.promotion.fields.edital_link') }}</label>
                            <input class="form-control" type="text" name="edital_link" id="edital_link" value="{{ old('edital_link', $promotion->edital_link) }}">
                            @if($errors->has('edital_link'))
                                <span class="help-block" role="alert">{{ $errors->first('edital_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.edital_link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('creator') ? 'has-error' : '' }}">
                            <label for="creator_id">{{ trans('cruds.promotion.fields.creator') }}</label>
                            <select class="form-control select2" name="creator_id" id="creator_id">
                                @foreach($creators as $id => $creator)
                                    <option value="{{ $id }}" {{ (old('creator_id') ? old('creator_id') : $promotion->creator->id ?? '') == $id ? 'selected' : '' }}>{{ $creator }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('creator'))
                                <span class="help-block" role="alert">{{ $errors->first('creator') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.promotion.fields.creator_helper') }}</span>
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