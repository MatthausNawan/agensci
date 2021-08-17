<div>
   
    <div class="links-wrapper p-2">
        <h4>Chamadas de Publição</h4>
        <div class="row">
            <div class="col-6 d-flex flex-row">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" name="query" placeholder="digite para pesquisar">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary ml-1"><i class="fa fa-search"></i> Pesquisar</button>
                </div>
            </div>
        </div>
        <div class="list-group">
            @foreach($publish_calls as $pc)
            <a href="{{$pc->link}}" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$pc->magazine}}</h5>
                <small>{{$pc->created_at->format('d/m/Y')}}</small>
                </div>
                <p class="mb-1">{{$pc->dossie}}</p>
                <small>{{$pc->link}}</small                
            </a>
            @endforeach
        </div>
    </div>
</div>
