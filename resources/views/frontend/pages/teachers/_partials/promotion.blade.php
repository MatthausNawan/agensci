<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($promotions as $promotion)
            <div class="card card-border-primary">
                <div class="card-body">
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
            </div>
            @endforeach
        </div>
    </div>
</div>
