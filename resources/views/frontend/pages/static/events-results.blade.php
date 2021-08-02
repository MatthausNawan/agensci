@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 my-2 text-center">
        <img src="https://via.placeholder.com/1000x100" alt="" class="img-rounded">
    </div>
</div>

<div class="row">

   <div class="col-lg-12">
        <div class="d-flex flex-row py-2">
            <a href="{{ route('site.home') }}" class="btn btn-sm btn-outline-dark">Voltar</a>
            <h3 class="mx-1">Resultados:</h3>  
        </div>      
   </div>

   <div class="col-lg-12">
       @foreach($events->chunk(3) as $event)
        <div class="card-deck mb-2">
            @foreach($event as $e)
            <div class="card" style="width: 18rem;">
                <a href="{{$e->link}}" target="_blank">
                    <img class="card-img-top" src="{{$e->banner ? $e->banner->getUrl() : ''}}" alt="{{$e->title}}">
                    <div class="card-body">
                        <p class="card-text">{{Str::limit($e->title,100)}}</p>                        
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach    
   </div>
</div>

@endsection