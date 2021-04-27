<div class="my-2">
    <div class="d-flex flex-row justify-content-between border-bottom border-dark ">
        <h5 class="text-bold">{{$title ?? 'Titulo'}}</h5>
        <a href="#" class="p-1 text-dark external-button">
            Visualizar Todas
        </a>
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($news as $new)
                <div class="card">
            <a href="{{ route('site.post',$new->slug) }}">
                    <img src="{{$new->banner ? $new->banner->getUrl() : ''}}" alt="Card image cap" height="300px">
                    <div class="news-info m-2">
                        <a href="{{ route('site.post',$new->slug) }}" class="btn-link">
                            <h4 class="text-dark">{{$new->title ?? 'titulo'}}</h4>
                        </a>
                    </div>
            </a>
                </div>
            @endforeach
        </div>
    </div>
</div>


