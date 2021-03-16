@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.students._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('student.personal-links.create') }}" class="btn btn-secondary">Adicionar Link</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Nome</td>
                            <td>Acões</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Link 1</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-dark">Ver</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Link 2</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-dark">Ver</a>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

@endsection
