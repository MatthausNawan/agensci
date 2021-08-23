<div class="agency-card">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($event_calls as $event)
            <div class="agency-card mx-1">                           
                <div class="card-body">
                    <div class="posts-info d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between">
                            <a href="#" class="btn-link">
                                <h6 class="text-white">{{$event->title}}</h6>
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

