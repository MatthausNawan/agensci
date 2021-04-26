<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($speakers as $speaker)
            <div class="card card-border-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ $speaker->photo ? $speaker->photo->getUrl() : ''}}" alt="" class="img-thumbnail img-fluid" style="height: 200px; width:200px">
                        </div>
                        <div class="col-8">
                            <span class="font-weight-bold">{{$speaker->name}}</span>
                            <div class="speaker-info d-flex flex-column">
                                <span><i>{{ $speaker->description ?? '' }}</i></span>
                                <span class="text-dark text-center border-bottom">Areas</span>
                                <div class="speaker-areas d-flex flex-row">
                                    @foreach($speaker->areas as $area)
                                        <a class="badge badge-pill badge-dark m-2">{{$area}}</a>
                                    @endforeach
                                </div>
                                <span class="text-dark text-center border-bottom">Palestras</span>
                                <div class="speaker-areas d-flex flex-row">
                                    @foreach($speaker->speeches as $speech)
                                        <a class="badge badge-pill badge-dark m-2">{{$speech}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
