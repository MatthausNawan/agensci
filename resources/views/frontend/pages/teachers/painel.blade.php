@extends('layouts.frontend')

@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.dashboard')
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Programas de Estatística','links'=>$statistics_softwares])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Aplicativos Úteis','links'=>$util_apps])

    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.painel')
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                @include('frontend.pages.teachers._partials.news',['news'=>$posts,'title'=>'Notícias'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.news',['news'=>$posts,'title'=>'Chamdadas de Eventos'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.promotion',['promotions'=>$promotions,'title'=>'Chamadas de Fomento'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.promotion',['promotions'=>$promotions,'title'=>'Chamadas para Publicação'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- TODO: produtos/servicos -->
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Apoiadoras','links'=>$articles])
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Parceiras','links'=>$articles])
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Patrocinadoras','links'=>$articles])
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>
@endsection

@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
@endsection



