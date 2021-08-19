@extends('layouts.default')

@section('page_content')

    <div class="links-wrapper">
        <div class="post p-2">
            <div class="post-header d-flex flex-column">
                <h2 class="font-weight-bold">{{$post->title ?? ''}}</h2>                                
            </div>

            <div class="post-img">
                <img src="{{ $post->banner ? $post->banner->getUrl() : '' }}" alt="" width="100%" height="250px">
            </div>

            <div class="post-autor my-3">
                <i>{{ $post->author->name ?? ''}}</i>
            </div>

            <div class="post-detail">
                <p class="mt-2 text-justify">{{  $post->detail ?? ''}}</p>
            </div>
        </div>
    </div>
    
    <div class="links-wrapper">
        <div class="post-recomended-title">
            <h3 class="border-bottom border-dark">Leia Também</h3>
        </div>
        <div class="posts-recomended mb-2">
            <div class="list-group links-wrapper">
                @forelse($relatedPosts as $relpost)
                <a href="{{route('site.post',$relpost->slug)}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$relpost->title}}</h5>                    
                    </div>
                    <small class="mb-1">{!! Str::limit($relpost->detail,70) !!}</small>                    
                </a>
                @empty
                <small>Nenhum post</small>
                @endforelse                
            </div>
        </div>       
    </div> 
@endsection
