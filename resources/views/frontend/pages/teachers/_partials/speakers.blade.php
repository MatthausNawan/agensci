<div class="agency-card">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>        
        <a href="{{ route('site.viewAll.speakers') }}" class="text-white"><i class="fa fa-search"></i>visualizar todos</a>       
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($speakers as $speaker)
            <div class="agency-card mx-1">    
                <div class="row links-wrapper p-3">
                    <div class="col-lg-3">
                        <img src="{{ $speaker->photo ? $speaker->photo->getUrl() : asset('images/avatar.png')}}" class="img-thumbnail">
                    </div>
                    <div class="col-lg-9">
                        <div class="speaker-info">
                            <span class="font-weight-bold speaker-title">{{$speaker->name}}</span>
                            <div class="d-flex flex-column speaker-detail">
                                <span><i>{{ $speaker->description ?? '' }}</i></span>                                                        
                                <span class="text-center border-bottom font-weight-bold">Temas e Tópicos das Palestras</span>                                    
                                <i class="speaker-speech">{{$speaker->speeches}}</i>
                            </div>        
                        </div>                    
                    </div>  
                </div>              
            </div>
        @endforeach
    </div>    
</div>
