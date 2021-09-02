@extends('layouts.default')


@section('page_content')

<h2>Notícias</h2>

<div class="col-12">
    <form action="" method="get" class="form-inline d-flex justify-content-end">
        <div class="form-group mx-1">
            <div class="input-group">
                <label for="">Ordenar</label>
                <select name="sort" id="" class="form-control form-control-sm">
                    <option value="a-z" {{Request::get('sort')=='a-z' ? 'selected' : ''}}>A-Z</option>
                    <option value="z-a" {{Request::get('sort')=='z-a' ? 'selected' : ''}}>Z-A</option>
                    <option value="asc" {{Request::get('sort')=='asc' ? 'selected' : ''}}>Novos</option>
                    <option value="desc" {{Request::get('sort')=='desc' ? 'selected' : ''}}>Antigos</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="mx-1 btn btn-sm btn-black rounded border"><i class="fa fa-filter"></i>Filtrar</button>
        </div>
    </form>
</div>


@foreach($speakers as $speaker)
<div class="agency-card mx-1">
    <div class="row links-wrapper p-3">
        <div class="col-lg-3">
            <img src="{{ $speaker->photo ? $speaker->photo->getUrl() : asset('images/avatar.png')}}" class="img-thumbnail">
        </div>
        <div class="col-lg-9">
            <div class="speaker-info">
                <span class="font-weight-bold speaker-title">{{$speaker->name}}</span>
                <div class="d-flex flex-column speaker-detail">
                    <span><i>{{ $speaker->description ?? '' }}</i></span>
                    <span class="text-center border-bottom font-weight-bold">Temas e Tópicos das Palestras</span>
                    <i class="speaker-speech">{{$speaker->speeches}}</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{$speakers->links()}}
@endsection