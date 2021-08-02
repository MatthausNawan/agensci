<div class="links-wrapper">
    @if(!isset($header))
    <h5 class="font-weight-bold border-bottom border-dark">Empresas Anunciantes</h5>
    @endif
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @if($products)
        <a class="nav-item bg-light text-white nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Produtos</a>
        @endif
        @if($services)
        <a class="nav-item bg-light text-white nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Serviços</a>
        @endif

    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        @if($products)
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            @include('frontend.pages.home._partials.external-links',['links'=>$products])
        </div>
        @endif
        @if($services)
        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @include('frontend.pages.home._partials.external-links',['links'=>$services])
        </div>
        @endif
    </div>
</div>
