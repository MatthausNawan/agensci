<div class="links-wrapper py-2">
    <ul class="nav nav-tabs px-4" id="myTab" role="tablist">
        @foreach($se as $seg)
        <li class="nav-item">
            <a class="nav-link bg-light text-white {{ $loop->first ? 'active' : 'ml-1' }}" id="{{$seg->id}}-tab" data-toggle="tab" href="#tab{{$seg->id}}" role="tab" aria-controls="{{$seg->id}}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{$seg->name}}</a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">
        @foreach($events as $key => $event)
        <div class="tab-pane px-4 fade {{ $loop->first ? 'show active' : '' }}" id="tab{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
            <div class="card-group {{ $event->count() >= 4 ? $class : ' '  }}">
                @foreach($event as $e)
                <div class="card ">
                    <img class="card-img-top" src="{{$e->banner->getUrl()}}" alt="Card image cap" style="height: 200px">
                    <div class="card-body">
                        <p class="card-title">{{ $e->title }}</p>
                        <div class="details d-flex flex-column">
                            <span class="details-text">Data Evento: {{$e->start_date }}</span>
                            <span class="details-text">Local: {{ $e->location ?? 'Local do Evento' }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
