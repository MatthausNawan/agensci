<div class="links-wrapper my-2">
    <div class="section-wrapper">
        <h5 class="text-bold d-flex section-title mt-1">{{$title ?? 'Titulo'}}</h5>
        <div class="my-2 px-4">
            <div class="carrousel">
                @foreach($profiles as $profile)
                <div class="card card-border-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ $profile->photo->getUrl()}}" alt="" class="img-thumbnail" style="height:150px;">
                            </div>
                            <div class="col-8">
                                <p>{{$profile->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
    </div>
</div>
