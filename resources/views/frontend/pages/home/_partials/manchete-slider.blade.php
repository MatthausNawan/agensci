<div class="links-wrapper">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($sm as $segm)
        <li class="nav-item">
            <a class="nav-link bg-light text-white {{ $loop->first ? 'active' : 'ml-1' }}" id="{{$segm->id}}-tabg" data-toggle="tab" href="#tabg{{$segm->id}}" role="tab" aria-controls="{{$segm->id}}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{$segm->name}}</a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">
        @foreach($magazines as $key => $magazine)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tabg{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tabg">
            <!-- <div class="card-group {{ $magazine->count() >= 4 ? $class : ' '  }}"> -->
            <div class="card-group {{$class}}">
                @foreach($magazine as $mag)
                <div class="card">
                    <img class="card-img-top" src="{{$mag->logo ? $mag->logo->getUrl() : ''}}" alt="Card image cap" style="height:30px;width:100%">
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <div class="card">
        @include('frontend.pages.home._partials.card-slider-single')
    </div>
</div>
