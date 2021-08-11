<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($students_profiles as $profile)
            <div class="card news-card">
                <div class="card-body">                    
                    <div class="row">                       
                        <div class="col-9">                            
                            <div class="d-flex flex-column">
                                <div class="foment-data d-flex flex-row justify-content-start">
                                    <span class="foment-label ">Nome</span>
                                    <span class="foment-value">{{ $profile->name }}</span>
                                </div>
                                <div class="foment-data d-flex flex-row justify-content-start">
                                    <span class="foment-label ">Curso</span>
                                    <span class="foment-value">{{ $profile->couse_name }}</span>
                                </div>   
                                <div class="foment-data d-flex flex-row justify-content-start">
                                    <span class="foment-label ">Instituição</span>
                                    <span class="foment-value">{{ $profile->university_name }}</span>
                                </div> 
                                <div class="foment-data d-flex flex-row justify-content-start">
                                    <span class="foment-label">Lattes</span>
                                    <span class="foment-value"><a href="{{ $profile->lattes_link }}">{{ Str::limit($profile->lattes_link,30) }}</a> </span>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-3">
                            <img src="{{ $profile->photo ? $profile->photo->getUrl() : asset('images/avatar.png')}}" alt="" class="img-thumbnail p-0 m-0" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Perfil</span>
                            <div class="d-flex flex-column foment-value">
                                <span class="">{{$profile->bio}}</span>
                                <small class="text-right">
                                    <span class="text-dark">Enviar Mensagem</span>
                                    <a href="mailto:{{$profile->email}}">Email</a>
                                    &mdash;
                                    <a href="tel:{{$profile->phone}}">Celular</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
