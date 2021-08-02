<div class="my-2">
    <div class="d-flex flex-row justify-content-between border-bottom border-dark ">
        <h5 class="text-bold">{{$title ?? 'Titulo'}}</h5>
       
        <!-- <a href="#" class="p-1 text-dark external-button">
            Visualizar Todas
        </a> -->
    </div>
    <div class="my-2">        
        <div class="card">                           
            <div class="posts-info m-2 d-flex flex-column">
                <a href="{{ route('site.post',$post->slug) }}" class="btn-link">
                    <h4 class="text-dark">{{$post->title ?? 'titulo'}}</h4>
                </a>
                <small class="mb-3">Postado em: {{ $post->created_at->format('d/m/Y') }}</small>
                <span>{!! $post->detail !!}</span>
            </div>            
        </div>                   
    </div>
</div>


