@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 my-2 text-center">
        <img src="https://via.placeholder.com/1920x200" alt="" class="img-rounded w-100">
    </div>
</div>


<div class="links-wrapper">
    <div class="col-lg-12">


        <form action="{{ route('site.serach-event') }}" method="get" class="form-inline border rounded justify-content-center">
            <div class="form-group p-1 m-1">
                <label for="" class="font-weight-bold">Áreas</label>
                <select id="" class="form-control form-control-sm p-0" name="q_area">
                    <option value="" selected>Selecione</option>
                    @foreach($segments as $segment)
                    <option value="{{$segment->id}}" {{Request::get('q_area') == $segment->id ? 'selected' : ''}}>{{ $segment->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group p-1 m-1">
                <label for="" class="font-weight-bold">Categorias</label>
                <select name="q_category" id="" class="form-control form-control-sm p-0">
                    <option value="" selected>Selecione</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{Request::get('q_category') == $category->id ? 'selected' : ''}}>{{ $category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group p-1 m-1">
                <label for="" class="font-weight-bold">País</label>
                <select id="" class="form-control form-control-sm p-0" name="q_country">
                    <option value="" selected>Selecione</option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}" {{Request::get('q_country') == $country->id ? 'selected' : ''}}>{{ $country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group p-0">
                <label for="" class="font-weight-bold">Estados</label>
                <select id="" class="form-control form-control-sm p-0" name="q_state">
                    <option value="" selected>Selecione</option>
                    @foreach($states as $state)
                    <option value="{{$state->id}}" {{Request::get('q_state') == $state->id ? 'selected' : ''}}>{{ $country->name}}>{{ $state->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm ">
                Pesquisar
            </button>
        </form>

        <p class="mx-1">Resultados:</p>

    </div>

    <div class="col-lg-12 p-0 d-flex flex-row flex-wrap justify-content-center">
        @foreach($events as $e)
        <div class="card p-0 m-1 col-3" style="width: 18rem;">
            <a href="{{$e->link}}" target="_blank">
                <img class="w-100" src="{{$e->banner ? $e->banner->getUrl() : ''}}" alt="{{$e->title}}">
                <div class="card-body p-1">
                    <p class="card-title small text-bold card-text">{{ $e->title }}</p>
                    <span class="details-text">Data Evento: {{$e->start_date }}</span>
                    <span class="details-text">Local: {{ $e->location ?? 'Local do Evento' }}</span>
                    @if($e->link)
                    <span class="details-text">Link:<a href="{{ $e->link ?? ''}}" class="details-text" target="_blank"> {{ $e->link ?? ''}}</a></span>
                    @endif
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection