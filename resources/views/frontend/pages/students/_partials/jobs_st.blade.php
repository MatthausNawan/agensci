<div class="agency-card my-2">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div> 
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($jobs_st as $job_st)            
                <div class="agency-card mx-1">
                    <div class="d-flex flex-row">
                        <span class="foment-label text-center">Empresa</span>
                        <span class="foment-value text-center">
                            <span>{{ $job_st->company }}</span>
                        </span>
                        <span class="foment-value text-center d-flex justify-content-center">
                            <img src="{{ $job_st->companyJob->logo ? $job_st->companyJob->logo->getUrl('thumb') : '' }}" alt="" style="height:50px; width:50px;">
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Área</span>
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
            @endforeach
        </div>
    </div>
</div>
