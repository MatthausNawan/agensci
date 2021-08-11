<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($speakers as $speaker)
            <div class="card news-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $speaker->photo ? $speaker->photo->getUrl() : asset('images/avatar.png')}}" class="img-thumbnail">
                        </div>
                        <div class="col-9">
                            <span class="font-weight-bold">{{$speaker->name}}</span>
                            <div class="speaker-info d-flex flex-column">
                                <span><i>{{ $speaker->description ?? '' }}</i></span>                                                        
                                <span class="text-center border-bottom">Temas e Tópicos das Palestras</span>
                                 <i>{{$speaker->speeches}}</i>
                            </div>                            
                        </div>
                    </div>                      
                </div>
                <div class="card-footer p-0 m-0 text-center text-dark">
                    <a href="">Ver todos</a>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
</div>
