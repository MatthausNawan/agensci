@extends('layouts.default')


@section('page_content')

<h2>Notícias</h2>

<div class="col-12">
    <form action="" method="get" class="form-inline d-flex justify-content-end">
        <div class="form-group">
            <div class="input-group">
                <label for="">Ordenar</label>
                <select name="sort" id="" class="form-control">
                    <option value="a-z">A-Z</option>
                    <option value="z-a">Z-A</option>
                    <option value="asc">Novos</option>
                    <option value="desc">Antigos</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
        </div>
    </form>
</div>


@foreach($posts as $post)
    <div class="links-wrapper">
        <div class="agency-card mx-1">                           
            <div class="posts-info m-2 d-flex flex-column">
                <div class="d-flex flex-row justify-content-between">
                    <a href="{{ route('site.post',$post->slug) }}" class="btn-link">
                        <h6 class="text-white"><span class="text-uppercase">Autor(a):</span>{{$post->author->name ?? ''}}</h6>
                    </a>
                    <small class="mb-3">{{ $post->created_at->format('d/m/Y') }}</small>
                </div>
                
                <div class="bg-white p-2 d-flex flex-column">
                    <h3 class="agency-post-title">{{ $post->title ?? ''}}</h3>
                    <span class="agency-post-text text-justify">{!! Str::limit($post->detail,250) !!}</span>
                    <a href="{{ route('site.post',$post->slug) }}" class="text-right mr-2 external-button">Continue Lendo</a>
                </div>
            </div>                  
        </div>    
    </div>  
@endforeach
{{$posts->links()}}
@endsection