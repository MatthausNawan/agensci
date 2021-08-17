@extends('layouts.default')

@section('page_content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="col-lg-12 h-100 text-center">
    <h3>Obrigado! Seu Cadastro foi Realizado.</h3>
    <p>Estamos avaliando seus dados e em breve você receberá um email de verificação. Por favor verifique sua caixa de emails.</p>
    <a href="{{route('site.home')}}" class="btn btn-dark">Voltar para o site.</a>
</div>

@endsection
