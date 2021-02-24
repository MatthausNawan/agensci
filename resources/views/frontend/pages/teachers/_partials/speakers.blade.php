<div class="links-wrapper my-2">
    <div class="section-wrapper">
        <h5 class="text-bold d-flex section-title mt-1">{{$title ?? 'Titulo'}}</h5>
        <div class="my-2 px-4">
            <div class="speakers-wrapper carrousel">
                @foreach($speakers as $speaker)
                <div class="card card-border-primary">
                    <div class="card-header bg-dark text-white">
                        Palestrante
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ $speaker->photo->getUrl()}}" alt="" class="img-thumbnail img-fluid">
                            </div>
                            <div class="col-8">
                                <p>{{$speaker->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todos</span></a>
    </div>
</div>
