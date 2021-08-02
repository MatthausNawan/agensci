@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3>Obrigado(a) pelo interesse em anunciar conosco</h3>
        <small>Revise os dados so seu anuncio e confirme, entraremos em contato em breve.</small>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="150px"><strong>Data Inicio</strong></td>
                            <td>{{ $announcement->start_at->format('d/m/Y')}}</td>
                        </tr>
                        <tr>
                            <td><strong>Data Final</strong></td>
                            <td>{{ $announcement->end_at->format('d/m/Y')}}</td>
                        </tr>
                        <tr>
                            <td><strong>Dias </strong></td>
                            <td>{{ $announcement->start_at->diffInDays($announcement->end_at)}}</td>
                        </tr>
                        <tr>
                            <td><strong>Estados (UF) </strong></td>
                            <td>
                                @foreach($announcement->reach_states as $state)
                                    <span class="badge badge-dark">{{ $state}}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Categorias</strong></td>
                            <td>
                                @foreach($announcement->reach_categories as $category)
                                    <span class="badge badge-dark">{{ $category}}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Áreas</strong></td>
                            <td>
                                @foreach($announcement->reach_segments as $segment)
                                    <span class="badge badge-dark">{{ $segment}}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Custo do Anúncio</strong></td>
                            <td>
                                R$ {{ $total_price ?? '0,00'}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="col-12 mt-2">
        <a href="{{route('site.advertise.confirm',$announcement->id)}}" class="btn btn-dark">Confirmar e enviar <i class="fa fa-check"></i></a>
    </div>
</div>

@endsection
