<div class="agency-card">    
    <span class="agency-card-title text-center d-block">{{$title ?? 'Titulo'}}</span>                   
    <div class="owl-carousel owl-theme">
        @foreach($promotions as $promotion)            
            <div class="agency-card mx-1">
                <div class="col-9">
                    <div class="promotion-infos d-flex flex-column">
                        <span><strong>Orgão/Entidade:</strong> {{ $promotion->entity ?? ''}}</span>
                        <span><strong>Tipo:</strong> {{ $promotion->type ?? ''}}</span>
                        <span><strong>Temática:</strong> {{ $promotion->thematic ?? ''}}</span>
                        <span><strong>Recursos:</strong> {{ $promotion->resources_amount ?? ''}}</span>
                        <span><strong>Inscrição:</strong> {{ $promotion->subscription_period ?? ''}}</span>
                        @if($promotion->edital_link)
                        <span><strong>Link</strong><a href="{{ $promotion->edital_link ?? ''}}" target="_blank"> {{ $promotion->edital_link ?? ''}}</a></span>
                        @endif
                    </div>
                </div>
            </div>            
        @endforeach
    </div>    
</div>
