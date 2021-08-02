<div>
    <div class="row links-wrapper">
        <div class="col-md-8 p-1">
            <div class="card">
                <a href="{{$featureEvent->link ?? '#'}}" target="_blank">
                    <img class="card-img-top" src="{{$featureEvent->banner ? $featureEvent->banner->getUrl() : ''}}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <a href="{{$featureEvent->link }}" target="_blank">
                        <h5 class="card-title text-dark">{{$featureEvent->title}}</h5>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-md-4 p-1">
            <div class="search">
                <div class="p-2 border">
                    <h6>Busca Eventos</h6>
                    <form action="{{ route('site.serach-event') }}" method="get">
                        
                        <div class="form-group">
                            <label for="" class="">Áreas</label>
                            <select id="" class="form-control"  name="q_area">
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
                        <div class="form-group">
                            <label for="" class="">País</label>
                            <select id="" class="form-control" name="q_country">
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{ $country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Estados</label>
                            <select id="" class="form-control" name="q_state">
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{ $state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark btn-flat">                            
                            Pesquisar
                        </button>
                    </form>
                </div>
                <span class="text-danger">{{$resultMessage}}</span>
            </div>
        </div>
    </div>
</div>
