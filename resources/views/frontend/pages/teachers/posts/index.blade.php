@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('teachers.posts.create') }}" class="btn btn-primary">Adicionar Notícia</a>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <td>Codigo</td>
                <td>Titulo</td>
                <td>Categoria</td>
                <td>Statud</td>
                <td>Acões</td>
            </tr>

        </table>
    </div>
</div>

@endsection
