<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($jobs_st as $job_st)
            <div class="card card-border-primary">
                <div class="card-body">
                <div class="d-flex flex-row">
                        <span class="foment-label text-center">Empresa</span>
                        <span class="foment-value text-center">{{ $job_st->company }}</span>
                        <span class="foment-value text-center">LOGO</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Area</span>
                            <span class="foment-value">{{ $job_st->area }}</span>
                        </div>    
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Perfil do estagiário</span>
                            <span class="foment-value">{{ $job_st->profile }}</span>
                        </div>    
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Formaçao</span>
                            <span class="foment-value">{{ $job_st->formation }}</span>
                        </div> 
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Endereco</span>
                            <span class="foment-value">{{ $job_st->address }}</span>
                        </div>  
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Vagas</span>
                            <span class="foment-value">{{ $job_st->qty_jobs }}</span>
                        </div>  
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Aberta até:</span>
                            <span class="foment-value">{{ $job_st->expiration_date->format('d/m/Y') }}</span>
                        </div>  
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Link</span>
                            <span class="foment-value"><a href="{{ $job_st->link }}" target="_blank">{{ $job_st->link }}</a> </span>
                        </div>                       
                    </div>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</div>
