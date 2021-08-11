<div class="my-2">    
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($foment_calls as $call)
            <div class="card news-card">                           
                <div class="posts-info m-2 d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between news-header border-bottom">
                        <a href="#" class="btn-link">
                            <h6 class="text-dark">Chamada de Fomento</h6>
                        </a>
                        <small class="mb-3">{{ $call->created_at->format('d/m/Y') }}</small>
                    </div>
                    
                    <div class="d-flex flex-column mt-2">
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
                </div>  
                <div class="card-footer p-0 m-0 text-center text-dark">
                    <a href="">Ver todas</a>
                </div>          
            </div>    
            @endforeach
        </div>
    </div>
</div>
