<div class="my-2">
    <div class="d-flex flex-row border-bottom border-dark">
    <h5 class="text-bold d-flex  mt-1">{{$title ?? 'Titulo'}}</h5>
    <!-- <a href="#" class="p-1 btn-block text-right text-dark external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todas</span></a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
            @foreach($profiles as $profile)
            <div class="card card-border-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ $profile->photo ? $profile->photo->getUrl() : ''}}" alt="" class="img-thumbnail" style="height: 200px; width:200px">
                        </div>
                        <div class="col-8">
                            <p class="font-weight-bold">{{$profile->name}}</p>
                            <div class="profile-infos d-flex flex-column">
                                <span><strong>Curso:</strong> {{ $profile->course_name ?? ''}}</span>
                                <span><strong>Periodo:</strong> {{ $profile->period ?? ''}}</span>
                                <span><strong>Universidade:</strong> {{ $profile->university_name ?? ''}}</span>
                                @if($profile->lattes_link)
                                <span><strong>Lattes</strong><a href="{{ $profile->lattes_link ?? ''}}" target="_blank"> {{ $profile->lattes_link ?? ''}}</a></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                           <strong>Perfil: </strong> {{ $profile->bio ?? '' }}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
