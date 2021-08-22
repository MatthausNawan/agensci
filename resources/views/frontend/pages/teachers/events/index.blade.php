@extends('layouts.frontend')


@section('content')


@include('frontend.pages.teachers._partials.menu')


<div class="row">
    <div class="col-lg-12">
        <div class="card">            
                <div class="card-body">   
                <a href="{{ route('teachers.events.create') }}" class="btn btn-sm text-black border rounded mb-2">Adicionar Evento</a>
                <table class="w-100 table-hover" border="1">
                    <thead>
                        <tr>
                            <!-- <th>Banner</th> -->
                            <th>Titulo</th>
                            <th>Segmento</th>
                            <th>Inicio</th>
                            <th>Data Encerramento</th>
                            <th>Ativo</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <!-- <td><img src="{{$event->banner? $event->banner->getUrl('thumb') : '' }}" alt=""></td> -->
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->segment->name }}</td>
                            <td>{{ $event->start_date }}</td>
                            <td>{{ $event->end_date }}</td>
                            <td>{{ $event->enabled ? 'Sim' : 'Não' }}</td>
                            <td>
                                <a href="{{route('teachers.events.edit',$event->id)}}" class="btn btn-outline-danger btn-sm">Ver</a>
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
