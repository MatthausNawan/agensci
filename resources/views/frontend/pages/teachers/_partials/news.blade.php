<div class="links-wrapper my-2">
    <div class="section-wrapper">
        <h5 class="text-bold d-flex section-title mt-1">{{$title ?? 'Titulo'}}</h5>
        <div class="my-2 px-4">
            <div class="carrousel">
                @foreach($news as $new)
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between">
                            <span>{{$new->title ?? 'titulo'}}</span>
                            <span>{{$new->created_at->format('d/m/Y h:m')}}</span>
                        </div>
                    </div>
                    <img class="card-img-top" src="{{$new->banner->getUrl()}}" alt="Card image cap" height="300px">
                    <div class="card-body">
                        <span class="card-text">{!!$new->detail !!}</span>
                        <div class="flex-end mt-2">
                            <a href="" class="btn btn-sm btn-secondary">Continuar Lendo...</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
    </div>
</div>
