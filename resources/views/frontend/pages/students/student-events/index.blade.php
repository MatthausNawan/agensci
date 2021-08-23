@extends('layouts.frontend')


@section('content')


@include('frontend.pages.students._partials.menu')


<div class="row">
    <div class="col-lg-12">
        <div class="card links-wrapper">            
                <div class="card-body">   
                <a href="{{ route('students.student-events.create') }}" class="btn btn-sm text-black border rounded mb-2">Adicionar Evento</a>
                <table class="w-100 table-hover" border="1">
                    <thead>
                        <tr>                            
                            <th>Image</th>
                            <th>Descrição</th>
                            <th>Data</th>
                            <th>Local</th>
                            <th>Link</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentEvents as $event)
                        <tr>
                            <td><img src="{{$event->banner? $event->banner->getUrl('thumb') : '' }}" alt=""></td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->period }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->link }}</td>                            
                            <td>
                                <a href="{{ route('students.student-events.edit',$event->id) }}" class="btn btn-outline-danger btn-sm">Ver</a>
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
