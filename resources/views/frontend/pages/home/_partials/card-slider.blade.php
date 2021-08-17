<div class="links-wrapper">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($se as $seg)
        <li class="nav-item">
            <a class="nav-link {{ $loop->first ? 'active' : 'ml-1' }}" id="{{$seg->id}}-tab" data-toggle="tab" href="#tab{{$seg->id}}" role="tab" aria-controls="{{$seg->id}}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{$seg->name}}</a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">        
        @foreach($events as $key => $event)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
            <!-- <div class="card-group {{ $event->count() >= 4 ? $class : ' '  }}"> -->
            <div class="card-group {{$class}}">
                @foreach($event as $e)
                <div class="card">
                    <img class="card-img-top" src="{{$e->banner ? $e->banner->getUrl() : ''}}" alt="Card image cap" style="height:120px;width:100%">
                    <div class="card-body">
                        <p class="card-title small text-bold card-text">{{ $e->title }}</p>
                        <div class="details d-flex flex-column">
                            <span class="details-text">Data Evento: {{$e->start_date }}</span>
                            <span class="details-text">Local: {{ $e->location ?? 'Local do Evento' }}</span>
                            @if($e->link)
                                <span class="details-text">Link:<a href="{{ $e->link ?? ''}}" target="_blank"> {{ $e->link ?? ''}}</a></span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach        
    </div>
</div>
