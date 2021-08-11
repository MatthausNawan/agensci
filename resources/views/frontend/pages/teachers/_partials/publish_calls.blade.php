<div class="my-2">    
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($publish_calls as $publish_call)
            <div class="card news-card">                           
                <div class="posts-info m-2 d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between news-header border-bottom">
                        <a href="#" class="btn-link">
                            <h6 class="text-dark">Chamada de Publicação</h6>
                        </a>
                        <small class="mb-3">{{ $publish_call->created_at->format('d/m/Y') }}</small>
                    </div>
                    
                    <div class="d-flex flex-column mt-2">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Revista</span>
                            <span class="foment-value">{{ $publish_call->magazine }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">ISSN</span>
                            <span class="foment-value">{{ $publish_call->issn }}</span>
                            <span class="foment-label">Qualis</span>
                            <span class="foment-value">{{ $publish_call->qualis }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Periodicidade</span>
                            <span class="foment-value">{{ $publish_call->frequency }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Dossiê</span>
                            <span class="foment-value">{{ Str::limit($publish_call->dossie,200) }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Tema</span>
                            <span class="foment-value">{{ Str::limit($publish_call->theme,200) }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Organização</span>
                            <span class="foment-value">{{ $publish_call->organization }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Prazo de Submissão</span>
                            <span class="foment-value">{{ $publish_call->submission_period }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Edital</span>
                            <span class="foment-value"><a href="{{ $publish_call->link }}" target="_blank">{{ Str::limit($publish_call->link,30) }}</a> </span>
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
