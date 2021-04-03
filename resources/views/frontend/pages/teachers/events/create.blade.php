@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Cadastrar Evento</h4>
            </div>
            <form action="{{ route('teachers.events.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control" name="title">
                        @if($errors->has('title'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="" class="required">Area</label>
                        <select name="segment_id" id="" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($segments as $segment)
                            <option value="{{  $segment->id}}">{{$segment->name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('segment_id'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('segment_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="location" class="required">Localização</label>
                        <input type="text" class="form-control" name="location">
                        @if($errors->has('location'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('location') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="link" class="required">Link</label>
                        <input type="text" class="form-control" name="link">
                        @if($errors->has('link'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('link') }}</span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="start_date" class="required">Data Inicio Evento</label>
                            <input type="date" class="form-control date" name="start_date">
                            @if($errors->has('start_date'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('start_date') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="end_date" class="required">Data Final Evento</label>
                            <input type="date" class="form-control date" name="end_date">
                            @if($errors->has('end_date'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="title" class="required">Período de Inscrição</label>
                        <input type="text" class="form-control" name="subscription_period">
                        @if($errors->has('subscription_period'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('subscription_period') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="details" class="required">Detalhes</label>
                        <textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
                        @if($errors->has('details'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('details') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
