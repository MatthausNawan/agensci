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
            <form action="#" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="required">Area</label>
                        <select name="segment_id" id="" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($segments as $segment)
                            <option value="{{  $segment->id}}">{{$segment->name}} </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Localização</label>
                        <input type="text" class="form-control" name="location">
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="title" class="required">Data Inicio Evento</label>
                            <input type="date" class="form-control" name="start_date">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="title" class="required">Data Final Evento</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="title" class="required">Período de Inscrição</label>
                        <input type="text" class="form-control" name="subscription_period">
                    </div>

                    <div class="form-group">
                        <label for="details" class="required">Detalhes</label>
                        <textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
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
