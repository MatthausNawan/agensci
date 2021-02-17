<div class="row">
    <div class="col-md-8">
        <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/800x380" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="search">
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
