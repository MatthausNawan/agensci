@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.companies._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('companies.jobs.create') }}" class="btn btn-secondary">Adicionar Vaga </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Empresa</td>
                            <td>Área</td>
                            <td>Tipo</td>
                            <td>Formação</td>
                            <td>Salário</td>
                            <td>Vagas</td>
                            <td>Data de Expiração</td>
                            <td>Acões</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id}}</td>
                            <td>{{ $job->companies->name }}</td>
                            <td>{{ $job->area }}</td>
                            <td>{{ App\Models\Job::TYPE_SELECT[$job->type] }}</td>
                            <td>{{ $job->formation }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{ $job->qty_jobs }}</td>
                            <td>{{ $job->expiration_date }}</td>
                            <td>
                                <a href="{{route('companies.jobs.edit',$job->id)}}" class="btn btn-sm btn-dark">Editar</a>
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