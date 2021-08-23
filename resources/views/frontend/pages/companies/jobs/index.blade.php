@extends('layouts.frontend')
@section('content')
@include('frontend.pages.companies._partials.menu')

<div class="row">
    <div class="col-lg-12">
        <div class="card">            
            <div class="card-body">                
                <table class="w-100 table-hover" border="1">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Empresa</th>
                            <th>Área/Ocupação</th>
                            <th>Tipo</th>
                            <th>Formação</th>
                            <th>Salário</th>
                            <th>Vagas</th>
                            <th>Data de Expiração</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id}}</td>
                            <td>{{ $job->companyJob->name }}</td>
                            <td>{{ $job->area ?? $job->ocuppation }}</td>
                            <td>{{ App\Models\Job::TYPE_SELECT[$job->type] }}</td>
                            <td>{{ $job->formation }}</td>
                            <td>{{ $job->salary ?? '--'}}</td>
                            <td>{{ $job->qty_jobs }}</td>
                            <td>{{ $job->expiration_date->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{route('companies.jobs.edit',$job->id)}}" class="btn btn-sm btn-outline-danger">Ver</a>
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