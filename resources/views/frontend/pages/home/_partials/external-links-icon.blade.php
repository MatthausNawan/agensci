<div class="external_links">

    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title }}</span>
        </small>

        @foreach($links as $link)
        <div class="image m-2 d-flex flex-row border-bottom">
            <a href="{{$link->site }}" target="_blank">
                <img src="{{$link->logo ? $link->logo->getUrl() : ''}}" alt="{{$link->name}}" height="70px" width="50px" class="img-responsive">
            </a>
            <a href="{{$link->site }}" class="ml-1 small align-self-center external-button" target="_blank"><span>{{$link->name}}</span></a>
        </div>
        @endforeach
        @if($links->count() > 0)
            <a href="{{ route('site.search-links',$links->first()->category_id) }}" class="p-1 btn-block text-right  external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
        @endif
    </div>
</div>
