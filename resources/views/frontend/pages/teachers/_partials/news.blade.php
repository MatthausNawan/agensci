<div class="news-wrapper carrousel">
    @foreach($news as $new)
    <div class="card card-border-primary">
        <div class="card-header">
            {{$new->title ?? 'titulo'}}
        </div>
        <div class="card-body">
            {!!$new->detail !!}
            <div class="flex-end">
                <a href="" class="btn btn-sm btn-primary">Continuar Lendo...</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
