<div class="agency-card my-2">    
    <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>        
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($jobs as $job)            
                <div class="agency-card mx-1">
                    <div class="d-flex flex-row">
                        <span class="foment-label text-center">Empresa</span>
                        <span class="foment-value text-center">{{ $job->company }}</span>
                        <span class="foment-value text-center">LOGO</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Cargo</span>
                            <span class="foment-value">{{ $job->ocuppation }}</span>
                        </div>    
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Endereço</span>
                            <span class="foment-value">{{ $job->address }}</span>
                        </div>    
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Salario</span>
                            <span class="foment-value">R$ {{ number_format($job->salary,2,',','.') }}</span>
                        </div> 
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Vagas</span>
                            <span class="foment-value">{{ $job->qty_jobs }}</span>
                        </div>  
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Aberta até:</span>
                            <span class="foment-value">{{ $job->expiration_date->format('d/m/Y') }}</span>
                        </div>  
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Link</span>
                            <span class="foment-value"><a href="{{ $job->link }}" target="_blank">{{ $job->link }}</a> </span>
                        </div>                       
                    </div>
                </div>            
            @endforeach           
        </div>
    </div>
</div>
