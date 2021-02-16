@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-md-2 col-sm-12">

        @include('auth.login_column')

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links',['title'=>'Laboratorios de Pesquisa','links'=>$laboratorios])
        @include('frontend.pages.home._partials.external-links',['title'=>'Ongs','links'=>$ongs])
        @include('frontend.pages.home._partials.external-links',['title'=>'Sociedades','links'=>$sociedades])
        @include('frontend.pages.home._partials.external-links',['title'=>'Conselhos de Classe','links'=>$conselhos])

    </div>

    <div class="col-md-10 col-sm-12">
        @include('frontend.pages.teachers._partials.painel')

        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2 px-4">
                    @include('frontend.pages.teachers._partials.news',['news'=>$news])
                </div>

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2 px-4">
                    @include('frontend.pages.teachers._partials.speakers',['speakers'=>$speakers])
                </div>

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- TODO: produtos/servicos -->
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
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
