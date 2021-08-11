@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">

        @include('auth.login_column',['title'=>'Painel do Professor','route'=>'site.teachers.register'])

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Laboratorios de Pesquisa','links'=>$laboratorios])
        @include('frontend.pages.home._partials.external-links',['title'=>'Ongs','links'=>$ongs])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Sociedades','links'=>$sociedades])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Conselhos de Classe','links'=>$conselhos])

    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.painel')
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if($posts)
                    @include('frontend.pages.teachers._partials.news',['posts'=>$posts,'title'=>'Notícias'])
                @endif
                
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if($speakers)
                    @include('frontend.pages.teachers._partials.speakers',['speakers'=> $speakers,'title'=>'Palestrantes'])
                @endif
                
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.calls',['foment_calls'=> $foment_calls,'title'=>'Chamadas de Fomentos'])

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.publish_calls',['publish_calls'=> $publish_calls,'title'=>'Chamadas de Publicação'])
            </div>
            <div class="col-md-3 col-sm-12 p-0">
                <div class="row">
                    <div class="col-12 mb-2">
                        @include('frontend.pages.home._partials.products-and-services',['products'=>$products,'title'=>'','services'=>false,'header'=>false])
                    </div>
                </div>
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
                <div class="row">
                    <div class="col-12 mt-2">
                        @include('frontend.pages.home._partials.products-and-services',['services'=>$services,'title'=>'','products'=>false,'header'=>false])
                    </div>
                </div>
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
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
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
