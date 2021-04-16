<div class="external_links">

    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title }}</span>
        </small>

        @foreach($links as $link)
        <div class="image m-2">
            <a href="{{$link->site }}" target="_blank">
                <img src="{{$link->logo ? $link->logo->getUrl(): ''}}" alt="{{$link->name}}" width="100%" height="50px" class="img-responsive">
            </a>
        </div>
        @endforeach
        <a href="{{ route('site.search-links',$links->first()->category_id) }}" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
    </div>
</div>
