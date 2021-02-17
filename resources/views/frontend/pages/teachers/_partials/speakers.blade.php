<div class="speakers-wrapper carrousel">
    @foreach($speakers as $speaker)
    <div class="card card-border-primary">
        <div class="card-header">
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
