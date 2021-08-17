<div>
    <div class="row links-wrapper">
        <div class="col-md-8 p-1">
            <div class="featture-event">
                <a href="{{$featureEvent->link ?? '#'}}" target="_blank">
                    <img class="card-img-top border rounded" src="{{$featureEvent->banner ? $featureEvent->banner->getUrl() : ''}}" alt="Card image cap" style="height:290px; width:100%;">
                </a>
                
                <div class="featura-details d-flex flex-column p-2 bg-white">
                    <a href="{{$featureEvent->link }}" target="_blank">
                        <span class="feature-event-title">{{$featureEvent->title}}</span>                        
                    </a>
                    <span class="feature-event-detail">Data: {{ $featureEvent->start_date}}</span>
                    <span class="feature-event-detail">Local: {{ $featureEvent->location }}</span>
                </div>                
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="search">
                <div class="p-2 border">
                    <h6 class="font-weight-lighter">Busca Eventos</h6>
                    <form action="{{ route('site.serach-event') }}" method="get">                        
                        <div class="form-group p-0 m-0">
                            <label for="" class="font-weight-bold">Áreas</label>
                            <select id="" class="form-control form-control-sm p-0"  name="q_area">
                                @foreach($segments as $segment)
                                <option value="{{$segment->id}}">{{ $segment->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group p-0 m-0">
                            <label for="" class="font-weight-bold">Categorias</label>
                            <select name="q_category" id="" class="form-control form-control-sm p-0">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group p-0 m-0">
                            <label for="" class="font-weight-bold">País</label>
                            <select id="" class="form-control form-control-sm p-0" name="q_country">
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{ $country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group p-0">
                            <label for="" class="font-weight-bold">Estados</label>
                            <select id="" class="form-control form-control-sm p-0" name="q_state">
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{ $state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm ">                            
                            Pesquisar
                        </button>
                    </form>
                </div>
                <span class="text-danger">{{$resultMessage}}</span>
            </div>
        </div>
    </div>
</div>
