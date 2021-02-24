<div class="links-wrapper p-1">
    <div class="card-group">
        @if(isset($manchete))
        <div class="card">
            <img class="card-img-top img-responsive" src="{{$manchete->banner->getUrl()}}" alt="Card image cap" style="height: 200px">
            <div class="card-body">
                <div class="detais">
                    <span>Data: {{ $manchete->start_date }}</span>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
