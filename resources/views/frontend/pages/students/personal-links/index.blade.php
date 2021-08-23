@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.students._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="links-wrapper">          
            
            <div class="card-body">
                <a href="{{ route('students.meus-links.create') }}" class="btn text-black border rounded mb-2">Adicionar Link</a>
                <table class="w-100 table-hover" border="1">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Link</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($personalLinks as $personalLink)
                        <tr>
                            <td><img src="{{$personalLink->photo->getUrl()}}" alt="{{ $personalLink->title ?? '' }}" style="width:50px; height:60px"></td>
                            <td>{{ $personalLink->title ?? '' }}</td>
                            <td><a href="{{ $personalLink->link ?? '' }}" target="_blank">{{ $personalLink->link ?? '' }}</a></td>
                            <td>
                                <a href="{{ route('students.meus-links.edit',$personalLink->id) }}" class="btn btn-sm btn-outline-danger">Ver</a>
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
