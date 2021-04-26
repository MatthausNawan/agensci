<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
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


