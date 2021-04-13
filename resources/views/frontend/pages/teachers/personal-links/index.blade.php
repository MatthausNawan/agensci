@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teachers.personal-links.create') }}" class="btn btn-secondary">Adicionar Link</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Imagem</td>
                            <td>Titulo</td>
                            <td>Link</td>
                            <td>Acões</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($personalLinks as $personalLink)
                        <tr>
                            <td><img src="{{$personalLink->photo->getUrl()}}" alt="{{ $personalLink->title ?? '' }}" style="width:50px; height:60px"></td>
                            <td>{{ $personalLink->title ?? '' }}</td>
                            <td><a href="{{ $personalLink->link ?? '' }}" target="_blank">{{ $personalLink->link ?? '' }}</a></td>
                            <td>
                                <a href="{{ route('teachers.personal-links.edit',$personalLink->id) }}" class="btn btn-sm btn-dark">Ver</a>
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