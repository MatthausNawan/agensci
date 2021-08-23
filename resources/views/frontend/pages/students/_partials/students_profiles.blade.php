<div class="agency-card my-2">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div>   
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($students_profiles as $profile)            
                <div class="agency-card d-flex flex-column bg-white">                    
                    <div class="row d-flex flex-row">
                        <div class="col-2">
                            <img src="{{ $profile->photo ? $profile->photo->getUrl() : asset('images/avatar.png')}}" alt="" class="" style="width:100%;height:100%" >
                        </div>                       
                        <div class="col-10">                            
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
                                    <span class="foment-value"><a href="{{ $profile->lattes_link }}">{{ $profile->lattes_link }}</a> </span>
                                </div>                              
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            
                            <div class="d-flex flex-column foment-value">
                                <span class="font-weight-bold">Perfil</span>
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
