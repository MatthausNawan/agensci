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
            <p class="mt-2 text-justify">{!! $post->detail ?? '' !!}</p>
        </div>
    </div>
</div>
@endsection