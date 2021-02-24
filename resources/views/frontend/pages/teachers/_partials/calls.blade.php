<div class="links-wrapper my-2">
    <div class="section-wrapper">
        <h5 class="text-bold d-flex section-title mt-1">{{$title ?? 'Titulo'}}</h5>
        <div class="my-2 px-4">
            <div class="carrousel">
                @foreach($calls as $call)
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between">
                            <span>{{$call->title ?? 'titulo'}}</span>
                            <span>{{$call->created_at->format('d/m/Y h:m')}}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        {!!$call->detail !!}
                        <div class="flex-end">
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
