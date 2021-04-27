<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($jobs as $job)
            <div class="card card-border-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex flex-column">
                            <span>{{$job->company}}</span>
                            {{--<img src="{{ $job->companyJob->logo ? $job->companyJob->logo->getUrl() : ''}}" alt="" class="img-thumbnail" style="height: 100px; width:100px">--}}
                        </div>
                        <div class="col-9">

                            <div class="job-infos d-flex flex-column">
                                <span><strong>Área:</strong> {{ $job->area ?? ''}}</span>
                                <span><strong>Perfil:</strong> {{ $job->profile ?? ''}}</span>
                                <span><strong>Formação:</strong> {{ $job->formation ?? ''}}</span>
                                <span><strong>Endereço:</strong> {{ $job->address ?? ''}}</span>
                                <span><strong>Vagas:</strong> {{ $job->qty_jobs ?? ''}}</span>
                                <span><strong>Aberta até:</strong> {{ $job->expiration_date ?? ''}}</span>
                                @if($job->salary)
                                <span><strong>Sálario:</strong> {{ $job->salary ?? ''}}</span>
                                @endif
                                @if($job->link)
                                <span><strong>Link</strong><a href="{{ $job->link ?? ''}}" target="_blank"> {{ $job->link ?? ''}}</a></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
