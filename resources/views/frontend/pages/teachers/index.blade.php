@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-md-2 col-sm-12">

        <!-- //TODO LOGIN -->

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links',['title'=>'Laboratorios de Pesquisa','links'=>$laboratorios])
        @include('frontend.pages.home._partials.external-links',['title'=>'Ongs','links'=>$ongs])
        @include('frontend.pages.home._partials.external-links',['title'=>'Sociedades','links'=>$sociedades])
        @include('frontend.pages.home._partials.external-links',['title'=>'Conselhos de Classe','links'=>$conselhos])

    </div>

    <div class="col-md-10 col-sm-12">
        @include('frontend.pages.home._partials.feature')

        <div class="py-2">
            <img src="https://via.placeholder.com/1000x200" alt="" class="img-fluid">
        </div>

        @include('frontend.pages.home._partials.card-slider',['segments'=>$segments])

        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2">
                    @include('frontend.pages.home._partials.card-slider',['segments'=>$segments])
                </div>

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2">
                    @include('frontend.pages.home._partials.card-slider',['segments'=>$segments])
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- TODO: produtos/servicos -->
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
@endsection
