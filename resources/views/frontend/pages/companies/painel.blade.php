@extends('layouts.frontend')

@section('content')

<div class="row">
    @include('frontend.pages.companies._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.companies._partials.dashboard')

        {{--@include('frontend.pages.home._partials.external-links-icon',['title'=>'Links Importantes','links'=>$articles])
        @include('frontend.pages.home._partials.external-links',['title'=>'Tvs Universitárias','links'=>$articles])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Radios Universitárias','links'=>$articles])--}}
    </div>

    <div class="col-md-9 col-sm-12 p-1">        
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">                
                @if($event_calls)
                    @include('frontend.pages.teachers._partials.event_calls',['event_calls'=>$event_calls,'title'=>'Chamdadas de Eventos'])
                @endif               
                    <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if($students_profiles)
                    @include('frontend.pages.students._partials.students_profiles',['students_profiles'=> $students_profiles,'title'=>'Portifólios de Estudantes'])
                @endif 
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- TODO: produtos/servicos -->
                @include('frontend.pages.home._partials.external-links-icon',['title'=>'Exames Padronizados','links'=>$articles])
                @include('frontend.pages.home._partials.external-links',['title'=>'Bolsas e Auxílios','links'=>$articles])
                @include('frontend.pages.home._partials.external-links-icon',['title'=>'Aplicativos Úteis','links'=>$articles])
                @include('frontend.pages.home._partials.external-links-icon',['title'=>'Programas de Estatisticas','links'=>$articles])
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
