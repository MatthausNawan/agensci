@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teachers.speakers.create') }}" class="btn btn-secondary">Adicionar Palestrante</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Foto</td>
                            <td>Nome</td>
                            <td>Acões</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($speakers as $speaker)
                        <tr>
                            <td><img src="{{ $speaker->photo->getUrl('thumb') }}" alt=""></td>
                            <td>{{ $speaker->name }}</td>
                            <td>
                                <a href="{{route('teachers.speakers.edit',$speaker->id)}}" class="btn btn-sm btn-dark">Ver</a>
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
