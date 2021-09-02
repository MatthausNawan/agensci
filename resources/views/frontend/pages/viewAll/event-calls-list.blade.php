@extends('layouts.default')


@section('page_content')

<h2>Concursos</h2>

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


@foreach($eventCalls as $event)
<div class="links-wrapper">
    <div class="bg-dark mx-1 my-2">
        <span class="text-white">{{$event->title ??''}}</span>
        <div class="posts-info d-flex justify-content-center">
            <span>{!!$event->media!!}</span>
        </div>
    </div>
</div>
@endforeach
{{$eventCalls->links()}}
@endsection