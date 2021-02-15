<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach($se as $seg)
    <li class="nav-item">
        <a class="nav-link bg-dark text-white {{ $loop->first ? 'active' : 'ml-1' }}" id="{{$seg->id}}-tab" data-toggle="tab" href="#tab{{$seg->id}}" role="tab" aria-controls="{{$seg->id}}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{$seg->name}}</a>
    </li>
    @endforeach
</ul>
<div class="tab-content" id="myTabContent">
    @foreach($events as $key => $event)
    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
        <div class="card-group">
            @foreach($event as $e)
            <div class="card">
                <img class="card-img-top img-responsive" src="{{$e->banner->getUrl()}}" alt="Card image cap" style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $e->title }}</h5>
                    <p class="card-text">{!!$e->detais !!}</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
