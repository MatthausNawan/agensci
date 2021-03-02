@extends('layouts.frontend')

@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.dashboard')
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Programas de Estatística','links'=>$articles])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Aplicativos Úteis','links'=>$articles])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Radios Universitárias','links'=>$articles])
    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.teachers._partials.painel')
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">

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
