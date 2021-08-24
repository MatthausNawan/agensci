<div class="agency-card">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($event_calls as $event)
            <div class="agency-card mx-1">                                           
                <div class="posts-info d-flex flex-column">                              
                        {!!$event->media!!}                        
                </div>                  
            </div>    
        @endforeach
    </div>
</div>

