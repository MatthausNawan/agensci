<div class="external_links">

    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title }}</span>
        </small>

        @foreach($links as $links)
        <div class="image m-2">
            <a href="{{$links->site }}" target="_blank">
                <img src="{{$links->logo ? $links->logo->getUrl(): ''}}" alt="{{$links->name}}" width="100%" height="50px" class="img-responsive">
            </a>
        </div>
        @endforeach
        <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
    </div>
</div>
