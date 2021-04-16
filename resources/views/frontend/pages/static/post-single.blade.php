@extends('layouts.frontend')

@section('content')
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
                <h5 class="font-weight-600">{{$post->subtitle ?? 'Subtitulo da Notícia'}}</h5>
                <span class="font-weight-lighter my-2 border-top border-dark py-2">{{ $post->created_at->format('d/m/Y') }}</span>
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
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                    <small>And some small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                    <small class="text-muted">And some muted small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                    <small class="text-muted">And some muted small print.</small>
                </a>
            </div>
        </div>

        <img src="https://via.placeholder.com/400x100" class="img-fluid" alt="Responsive image">

        <img src="https://via.placeholder.com/400x100" class="img-fluid my-2" alt="Responsive image">

        <img src="https://via.placeholder.com/400x100" class="img-fluid" alt="Responsive image">
    </div>
</div>
@endsection
