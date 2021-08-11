<div class="my-2">
    <div class="d-flex flex-row justify-content-between border-bottom border-dark ">
        <h5 class="text-bold">{{$title ?? 'Titulo'}}</h5>
       
        <!-- <a href="#" class="p-1 text-dark external-button">
            Visualizar Todas
        </a> -->
    </div>
    <div class="my-2">
        <div class="owl-carousel owl-theme">
        @foreach($posts as $post)        
            <div class="card news-card">                           
                <div class="posts-info m-2 d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between news-header border-bottom">
                        <a href="{{ route('site.post',$post->slug) }}" class="btn-link">
                            <h6 class="text-dark">Notícia - {{$post->author->name ?? ''}}</h6>
                        </a>
                        <small class="mb-3">Postado em: {{ $post->created_at->format('d/m/Y') }}</small>
                    </div>
                    
                    <h3 class="news-title mt-2">{{ $post->title ?? ''}}</h3>
                    <span class="news-body text-justify">{!! Str::limit($post->detail,500) !!}</span>
                    <a href="{{ route('site.post',$post->slug) }}" class="text-right mr-2 text-dark ">Continue Lendo</a>
                </div>  
                <div class="card-footer p-0 m-0 text-center text-dark">
                    <a href="">Ver todas</a>
                </div>          
            </div>    
        @endforeach   
        </div>            
    </div>
</div>


