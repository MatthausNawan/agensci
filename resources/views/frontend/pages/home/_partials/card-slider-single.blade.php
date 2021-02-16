<div class="card-group {{ $class ?? 'carrousel' }}">
    @if(isset($manchete))
    @foreach($manchete as $e)
    <div class="card">
        <img class="card-img-top img-responsive" src="{{$e->banner->getUrl()}}" alt="Card image cap" style="height: 200px">
        <div class="card-body">
            <h5 class="card-title">{{ $e->title }}</h5>
            <p class="card-text">{!!$e->detais !!}</p>
        </div>
    </div>
    @endforeach
    @endif
</div>
