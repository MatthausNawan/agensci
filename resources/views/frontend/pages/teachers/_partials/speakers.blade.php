<div class="agency-card my-2">    
    <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
    <div class="owl-carousel owl-theme">
        @foreach($speakers as $speaker)
            <div class="agency-card m-1">
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
