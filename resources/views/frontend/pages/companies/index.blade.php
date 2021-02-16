@extends('layouts.frontend')

@section('content')
<div class="col-lg-8 offset-2">
    <form action="#" method="post">
        @csrf
        <div class="card">
            <div class="card-header">Cadastre-se</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="razao">Razao Social</label>
                    <input type="text" class="form-control">
                </div>


            </div>
        </div>

        <div class="card">
            <div class="card-header">Dados de Acesso</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="razao">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="razao">Senha</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="razao">Repetir Senha</label>
                    <input type="password" class="form-control" name="password-confirmation">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
@endsection
