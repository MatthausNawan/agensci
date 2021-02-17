@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-md-2 col-sm-12">
        @include('frontend.pages.home._partials.external-links',['title'=>'Pesquisar Artigo','links'=>$articles])

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links',['title'=>'Consulte','links'=>$articles])

        @include('frontend.pages.home._partials.external-links',['title'=>'Acesse','links'=>$orgaos_pesquisas])

        <h5 class="my-3 border-bottom font-weight-bold">
            Consulte Instituições
        </h5>

        @include('frontend.pages.home._partials.external-links',['title'=>'Públicas','links'=>$articles])
        @include('frontend.pages.home._partials.external-links',['title'=>'Particulares','links'=>$articles])
        @include('frontend.pages.home._partials.external-links',['title'=>'Internacionais','links'=>$articles])

    </div>

    <div class="col-md-10 col-sm-12">
        @include('frontend.pages.home._partials.feature')


        <div class="py-2">
            <img src="https://via.placeholder.com/1000x200" alt="" class="img-fluid">
        </div>



        @include('frontend.pages.home._partials.card-slider',['segments'=>$segments,'class'=>'carrousel-card'])


        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2 px-4">
                    @include('frontend.pages.home._partials.card-slider-single',['manchete'=>$machete_cientifica,'class'=>'carrousel','name'=>'cientifica'])
                </div>

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <div class="my-2 px-4">
                    @include('frontend.pages.home._partials.card-slider-single',['manchete'=>$site_cientifica,'class'=>'carrousel','name'=>'site'])
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                @include('frontend.pages.home._partials.external-links',['title'=>'Pesquisar Artigos','links'=>$articles])
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
