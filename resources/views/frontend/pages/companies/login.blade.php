@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x90" alt="" class="img-rounded" width="100%" height="90">
    </div>
</div>

<div class="row">
    <div class="col-4">
     @include('auth.login_column',['title'=>'Painel da Empresa','route'=>'site.companies.register'])
    </div>    
    <div class="col-8">
        @include('frontend.pages.companies._partials.painel')
    </div>
</div>
@endsection


