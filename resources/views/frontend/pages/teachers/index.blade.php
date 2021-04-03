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
                @include('frontend.pages.teachers._partials.news',['news'=>$news,'title'=>'Notícias'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.speakers',['speakers'=> $speakers,'title'=>'Palestrantes'])
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.calls',['calls'=> $calls,'title'=>'Chamadas de Publicações'])
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- TODO: produtos/servicos -->
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
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
    $('.carrousel-card').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.carrousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
    });
</script>
@endsection
