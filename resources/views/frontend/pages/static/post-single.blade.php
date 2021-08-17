@extends('layouts.default')

@section('page_content')
<div class="row">
    <div class="col-lg-12 my-2 text-center">
        <img src="https://via.placeholder.com/1000x100" alt="" class="img-rounded">
    </div>
</div>


<div class="row">
    <div class=" col-lg-8">
        <div class="post">
            <div class="post-header d-flex flex-column">
                <h2 class="font-weight-bold">{{$post->title ?? ''}}</h2>                                
            </div>

            <div class="post-img">
                <img src="{{ $post->banner ? $post->banner->getUrl() : '' }}" alt="" width="100%" height="500px">
            </div>

            <div class="post-autor my-3">
                <i>{{ $post->author->name ?? ''}}</i>
            </div>

            <div class="post-detail">
                <p class="mt-2 text-justify">{{  $post->detail ?? ''}}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 p-0">
        <div class="post-recomended-title">
            <h3 class="border-bottom border-dark">Leia Também</h3>
        </div>

        <div class="posts-recomended mb-2">
            <div class="list-group">
                @forelse($relatedPosts as $relpost)
                <a href="{{route('site.post',$relpost->slug)}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$relpost->title}}</h5>                    
                    </div>
                    <small class="mb-1">{{Str::limit($relpost->detail,70)}}</small>                    
                </a>
                @empty
                <small>Nenhum post</small>
                @endforelse                
            </div>
        </div>        
    </div>
</div>
@endsection
