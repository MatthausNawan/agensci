<div class="external_links">
    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title ?? '' }}</span>
        </small>

        <div class="links">
            @foreach($links as $link)
            <div class="image m-2">
                <a href="{{$link->site }}" target="_blank">
                    <img src="{{$link->logo ? $link->logo->getUrl(): ''}}" alt="{{$link->name}}" width="100%" height="50px" class="img-responsive px-4">
                </a>
            </div>
            @endforeach
        </div>        
    </div>
</div>
