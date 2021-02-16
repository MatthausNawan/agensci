<div class="profiles-wrapper carrousel">
    @foreach($profiles as $profile)
    <div class="card card-border-primary">
        <div class="card-header">
            Estudante
        </div>
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
