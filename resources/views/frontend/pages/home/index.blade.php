@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x90" alt="" class="img-rounded" width="100%" height="90">
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-12">

        @include('frontend.pages.home._partials.external-links',['title'=>'Pesquisar Artigo','links'=>$articles])

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links',['title'=>'Consulte','links'=>$orgaos_educacionais])

        @include('frontend.pages.home._partials.external-links',['title'=>'Acesse','links'=>$orgaos_pesquisas])

        <p class="my-3 border-bottom font-weight-bold">
            Consulte Instituições
        </p>

        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Públicas','links'=>$uni_publicas])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Particulares','links'=>$uni_privadas])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Internacionais','links'=>$uni_internacionais])

    </div>

    <div class="col-md-9 col-sm-12">
        @livewire('home.feature-event')


        <div class="py-2">
            <img src="https://via.placeholder.com/1000x90" alt="" class="img-fluid">
        </div>



        @include('frontend.pages.home._partials.card-slider',['segments'=>$segments,'class'=>'owl-carousel owl-theme'])


        <div class="row mt-2">
            <div class="col-md-8 col-sm-12">
                <img src="https://via.placeholder.com/1033x200" alt="" class="img-fluid">

                <div class="my-2">
                    @include('frontend.pages.home._partials.card-slider-single',['headline'=>$head_site])
                </div>

                <img src="https://via.placeholder.com/1033x200" alt="" class="img-fluid">

                <div class="my-2">
                    @include('frontend.pages.home._partials.card-slider-single',['headline'=>$head_magazine])
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-0">
                <div class="row">
                    <div class="col-12 mb-2">
                        @include('frontend.pages.home._partials.products-and-services',['products'=>$products,'services'=>$services])
                    </div>
                </div>
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">

                <div class="row">
                    <div class="col-12 my-2">
                        @livewire('home.news-letter')
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x90" alt="" class="img-rounded" width="100%" height="90">
    </div>
</div>
@endsection


@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:8,
        nav:true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll:1,
        arrows:false
    });
</script>
@endsection
