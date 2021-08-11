<div class="my-2">    
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($event_calls as $event)
            <div class="card news-card">                           
                <div class="card-body">
                    <div class="posts-info d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between news-header border-bottom">
                        <a href="#" class="btn-link">
                            <h6 class="text-dark">Chamada de Evento - {{$event->title}}</h6>
                        </a>
                        <small class="mb-3">{{ $event->created_at->format('d/m/Y') }}</small>
                    </div>
                    
                    <div class="d-flex flex-column mt-2">
                        {!!$event->media!!}
                    </div>
                </div>  
                </div>
                <div class="card-footer p-0 m-0 text-center text-dark">
                    <a href="">Ver todas</a>
                </div>          
            </div>    
            @endforeach
        </div>
    </div>
</div>
