<div class="external_links">

    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title }}</span>
        </small>

        @foreach($links as $link)
        <div class="image m-2 d-flex flex-row border-bottom">
            <a href="{{$link->link }}" target="_blank">
                <img src="{{$link->photo->getUrl()}}" alt="{{ $personalLink->title ?? '' }}" alt="{{$link->title}}" height="70px" width="50px" class="img-responsive">
            </a>
            <a href="{{$link->link }}" class="ml-1 small align-self-center external-button" target="_blank"><span>{{$link->title}}</span></a>
        </div>
        @endforeach        
    </div>
</div>
