<div class="links-wrapper my-2">
    <div class="section-wrapper">
        <h5 class="text-bold d-flex section-title mt-1">{{$title ?? 'Titulo'}}</h5>
        <div class="my-2 px-4">
            <div class="carrousel">
                @foreach($jobs as $job)
                <div class="card card-border-primary">
                    <div class="card-body">
                        <div class="row">
                            <p>{{$job->company}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a>
    </div>
</div>
