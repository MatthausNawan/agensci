<div class="agency-card">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div>
    <div class="owl-carousel owl-theme">
        @foreach($foment_calls as $call)
            <div class="agency-card mx-1">                    
                <div class="foment-data d-flex flex-row justify-content-start">
                    <span class="foment-label ">Orgao/Entidade</span>
                    <span class="foment-value">{{ $call->entity }}</span>
                </div>
                <div class="foment-data d-flex flex-row justify-content-start">
                    <span class="foment-label">Tipo</span>
                    <span class="foment-value">{{ Str::limit($call->thematic,50) }}</span>
                </div>
                <div class="foment-data d-flex flex-row justify-content-start">
                    <span class="foment-label">Recursos</span>
                    <span class="foment-value">RS {{ number_format($call->resources_amount,2,'.',',') }}</span>
                </div>
                <div class="foment-data d-flex flex-row justify-content-start">
                    <span class="foment-label">Periodo de Inscrição</span>
                    <span class="foment-value">{{ $call->subscription_period }}</span>
                </div>
                <div class="foment-data d-flex flex-row justify-content-start">
                    <span class="foment-label">Edital</span>
                    <span class="foment-value"><a href="{{ $call->edital_link }}">{{ Str::limit($call->edital_link,30) }}</a> </span>
                </div>                                                        
            </div>    
        @endforeach
    </div>    
</div>
