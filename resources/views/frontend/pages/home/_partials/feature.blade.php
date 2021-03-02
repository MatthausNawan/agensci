<div class="row links-wrapper">
    <div class="col-md-8 p-1">
        <a href="">
        <div class="card">
            <img class="card-img-top" src="{{$featured_event->banner->getUrl()}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$featured_event->title}}</h5>
                <p class="card-text">{!! $featured_event->details !!}</p>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4 p-1">
        <div class="search">
            <div class="p-2 border">
                <h6>Busca Eventos</h6>
                <form action="" class="form" method="get">
                    <div class="form-group">
                        <label for="" class="">Áreas</label>
                        <select name="q_segment" id="" class="form-control">
                            @foreach($segments as $segment)
                            <option value="{{$segment->id}}">{{ $segment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="">Categorias</label>
                        <select name="q_category" id="" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark btn-flat">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
</div>
