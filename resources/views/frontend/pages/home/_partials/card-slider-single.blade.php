<div class="links-wrapper p-1">
    <div class="card-group">
        @if(isset($site_headline))
        <div class="card">
            <img class="card-img-top img-responsive" src="{{$site_headline->banner ? $site_headline->banner->getUrl() : ''}}" alt="Card image cap" style="height: 200px">
            <div class="card-body">
                <div class="detais">
                    <strong>{{ $site_headline->title }}</strong>
                    <span class="text-justify">
                    {!! $site_headline->details !!}
                    </span>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
