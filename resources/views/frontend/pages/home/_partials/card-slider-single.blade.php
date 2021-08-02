<div class="links-wrapper p-1">
    <div class="card-group">
        @if(isset($headline))
        <div class="card">
            <img class="card-img-top img-responsive" src="{{$headline->banner ? $headline->banner->getUrl() : ''}}" alt="Card image cap" style="height: 200px">
            <div class="card-body">
                <div class="detais">
                    <strong>{{ $headline->title }}</strong>
                    <span class="text-justify">
                    {!! $headline->details !!}
                    </span>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
