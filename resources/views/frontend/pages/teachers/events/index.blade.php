@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teachers.events.create') }}" class="btn btn-secondary">Adicionar Evento</a>
            </div>
            <div class="card-body">
                <table class="table table-condensed table-striped table-hover">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-white">Banner</th>
                            <th class="text-white">Titulo</th>
                            <th class="text-white">Segmento</th>
                            <th class="text-white">Inicio</th>
                            <th class="text-white">Data Encerramento</th>
                            <th class="text-white">Ativo</th>
                            <th class="text-white">Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td><img src="{{$event->banner? $event->banner->getUrl('thumb') : '' }}" alt=""></td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->segment->name }}</td>
                            <td>{{ $event->start_date }}</td>
                            <td>{{ $event->end_date }}</td>
                            <td>{{ $event->enabled ? 'Sim' : 'Não' }}</td>
                            <td>
                                <a href="{{route('teachers.events.edit',$event->id)}}" class="btn btn-sm btn-dark">Ver</a>
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
