<div class="agency-card">    
    <!-- <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>    -->
    <div class="owl-carousel owl-theme">
        @foreach($event_calls as $event)
            <div class="agency-card mx-1">                           
                <div class="card-body">
                    <div class="posts-info d-flex flex-column">
                        <div class="d-flex flex-row">
                            <a href="#" class="btn-link">
                                <h6 class="text-white">Chamada de Evento - {{$event->title}}</h6>
                            </a>
                            <small class="mb-3">{{ $event->created_at->format('d/m/Y') }}</small>
                        </div>
                        
                        <div class="d-flex flex-column justity-content-center">
                            {!!$event->media!!}
                        </div>
                    </div>  
                </div>                      
            </div>    
        @endforeach
    </div>
</div>

