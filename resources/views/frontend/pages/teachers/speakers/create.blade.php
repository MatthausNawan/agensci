@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Cadastrar Palestrante</h4>
            </div>
            <form action="#" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="required">Nome</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="details" class="required">Bio</label>
                        <textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
