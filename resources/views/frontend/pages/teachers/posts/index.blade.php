@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>


<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teachers.posts.create') }}" class="btn btn-secondary">Adicionar Noticia</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>thumb</td>
                            <td>Titulo</td>
                            <td>Acões</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td><img src="{{$post->banner ? $post->banner->getUrl('thumb') : ''}}" alt=""></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{route('teachers.posts.edit',$post->id)}}" class="btn btn-sm btn-dark">Ver</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
