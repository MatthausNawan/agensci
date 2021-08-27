@extends('layouts.default')


@section('page_content')

<h2>Concursos</h2>

<div class="col-12">
    <form action="" method="get" class="form-inline d-flex justify-content-end">
        <div class="form-group">
            <div class="input-group">
                <label for="">Ordenar</label>
                <select name="sort" id="" class="form-control">
                    <option value="a-z">A-Z</option>
                    <option value="z-a">Z-A</option>
                    <option value="asc">Novos</option>
                    <option value="desc">Antigos</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
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