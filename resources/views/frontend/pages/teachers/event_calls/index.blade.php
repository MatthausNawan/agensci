@extends('layouts.frontend')


@section('content')


 @include('frontend.pages.teachers._partials.menu')


<div class="row">
    <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('teachers.event-calls.create') }}" class="btn btn-sm text-black border rounded">Adicionar Chamada de Evento</a>
                    <table class="w-100 table-hover mt-2" border="1">
                        <thead>
                            <tr>                                
                                <th>Titulo</th>                                
                                <th>Evento </th>
                                <th>Acões</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event_calls as $ec)
                            <tr>                                
                                <td>{{ $ec->title }}</td>                                
                                <td>{{ $ec->event->title }}</td>
                                <td>
                                    <a href="{{route('teachers.event-calls.edit',$ec->id)}}" class="btn btn-sm btn-dark">Ver</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
