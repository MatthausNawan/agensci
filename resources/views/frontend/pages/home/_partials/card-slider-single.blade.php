<div class="links-wrapper p-1">

        <ul class="nav nav-tabs" id="myTabMagazine" role="tablist">
            @foreach($sm as $sem)
                <li class="nav-item">
                    <a class="nav-link p-1 {{ $loop->first ? 'active' : 'ml-1' }}" id="1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="1" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{$sem->name}}</a>
                </li>
            @endforeach
        </ul>
        <div class="multiple-items">
            <img src="{{asset('images/rev1.png')}}" alt="Card image cap">                    
            <img src="{{asset('images/rev2.png')}}" alt="Card image cap">                    
            <img src="{{asset('images/rev3.png')}}" alt="Card image cap">                    
            <img src="{{asset('images/rev4.png')}}" alt="Card image cap">  
            <img src="{{asset('images/rev5.png')}}" alt="Card image cap">  
            <img src="{{asset('images/rev6.png')}}" alt="Card image cap">  
        </div>     
            
        @if(isset($headline))
        <div class="card">
            <img class="card-img-top img-responsive" src="{{$headline->banner ? $headline->banner->getUrl() : ''}}" alt="Card image cap" style="height: 200px">
            <div class="card-body">
                <div class="detais">
                    <strong>{{ $headline->title }}</strong>
                    <span class="text-justify">
                    {!! $headline->details !!}
                    </span>
                </div>
            </div>
        </div>
        @endif
    
</div>
