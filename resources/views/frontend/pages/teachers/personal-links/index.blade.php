@extends('layouts.frontend')


@section('content')


@include('frontend.pages.teachers._partials.menu')


<div class="row">
    <div class="col-lg-12">
        <div class="card">    
            <div class="card-body">
                <a href="{{ route('teachers.personal-links.create') }}" class="btn btn-sm text-black border rounded mb-2">Adicionar Link</a>
                <table class="table-hover w-100" border="1">
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
                            <td><img src="{{$personalLink->photo->getUrl()}}" alt="{{ $personalLink->title ?? '' }}" style="width:45px; height:45px"></td>
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