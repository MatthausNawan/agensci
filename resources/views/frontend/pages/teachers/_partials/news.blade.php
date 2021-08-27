<div class="agency-card">    
    <div class="card-header d-flex flex-row justify-content-between">
        <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>
        <a href="{{ route('site.viewAll.posts') }}" class="text-white"><i class="fa fa-search"></i>visualizar todas</a>        
    </div>
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($posts as $post)        
                <div class="agency-card mx-1">                           
                    <div class="posts-info m-2 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between border-bottom">
                            <a href="{{ route('site.post',$post->slug) }}" class="btn-link">
                                <h6 class="text-white"><span class="text-uppercase">Autor(a):</span>{{$post->author->name ?? ''}}</h6>
                            </a>
                            <small class="mb-3">{{ $post->created_at->format('d/m/Y') }}</small>
                        </div>
                        
                        <div class="bg-white p-3 d-flex flex-column">
                            <h3 class="agency-post-title">{{ $post->title ?? ''}}</h3>
                            <span class="agency-post-text text-justify">{!! Str::limit($post->detail,250) !!}</span>
                            <a href="{{ route('site.post',$post->slug) }}" class="text-right mr-2 external-button">Continue Lendo</a>
                        </div>
                    </div>                  
                </div>    
            @endforeach   
        </div> 
        <!-- <div class="agency-card-nav-news d-flex flex-row justify-content-between align-self-center px-2 mb-1"> -->
                    <!-- <a href="" class="text-white" id="owl-post-prev"><i class="fa fa-chevron-left pr-3"></i></a> -->
                    
                    <!-- <a href="" class="text-white " id="owl-post-next"><i class="fa fa-chevron-right pl-3"></i></a> -->
        <!-- </div>            -->
    </div>
</div>




