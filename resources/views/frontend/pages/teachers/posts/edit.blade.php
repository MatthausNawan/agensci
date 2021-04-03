@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Editar Notícia</h4>
            </div>
            <form action="{{ route('teachers.posts.update',$post->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title ?? old('title') }}">
                        @if($errors->has('title'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="detail" class="required">Detalhes</label>
                        <textarea name="detail" id="" cols="30" rows="10" class="form-control">{{ $post->detail ?? old('detail') }}</textarea>
                        @if($errors->has('detail'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('detail') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
