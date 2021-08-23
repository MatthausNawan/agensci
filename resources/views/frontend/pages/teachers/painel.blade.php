@extends('layouts.frontend')

@section('content')

<div class="row">
    <div class="col-12 text-center panel-header">
    Agenda Cientifica
    </div>
</div> 


<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.dashboard')
        @include('frontend.pages.teachers._partials.links',['title'=>'Links Importantes','links'=>$links,''])
        @include('frontend.pages.teachers._partials.events',['title'=>'Meus Eventos','events'=>$events,''])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Programas de Estatística','links'=>$statistics_softwares])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Aplicativos Úteis','links'=>$util_apps])

    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.painel')
        <div class="row mt-2">
            <div class="col-md-8 col-sm-12">
                @if($posts)
                    @include('frontend.pages.teachers._partials.news',['posts'=>$posts,'title'=>'Notícias'])
                @endif                
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid my-2">
                
                @if($event_calls)
                    @include('frontend.pages.teachers._partials.event_calls',['event_calls'=>$event_calls,'title'=>'Chamdadas de Eventos'])
                @endif                
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid my-2">
                
                @if($foment_calls)
                    @include('frontend.pages.teachers._partials.calls',['foment_calls'=> $foment_calls,'title'=>'Chamadas de Fomentos'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid my-2">
                
                @if($publish_calls)
                    @include('frontend.pages.teachers._partials.publish_calls',['publish_calls'=> $publish_calls,'title'=>'Chamadas de Publicação'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid my-2">
            </div>
            <div class="col-md-4 col-sm-12">                
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Apoiadoras','links'=>$support_companies])
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Parceiras','links'=>$partners_companies])
                @include('frontend.pages.home._partials.external-links',['title'=>'Empresas Patrocinadoras','links'=>$sponsorship_companies])
                @include('frontend.pages.teachers._partials.events',['title'=>'Eventos Colaborados','events'=>$collaborate_events])
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

@section('styles')
<style>
    /* .owl-theme .owl-nav {
        display:flex;
        justify-content: space-around;
    } */
</style>

@endsection

@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
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



