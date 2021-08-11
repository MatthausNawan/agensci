@extends('layouts.frontend')

@section('content')

<div class="row">
    @include('frontend.pages.students._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.students._partials.dashboard')
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Tvs Universitárias','links'=>$high_school_tvs])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Radios Universitárias','links'=>$high_school_radios])
    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.students._partials.painel')
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">
                @if(isset($posts))
                    @include('frontend.pages.teachers._partials.news',['posts'=>$posts,'title'=>'Notícias'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                
                @if(isset($event_calls))
                    @include('frontend.pages.teachers._partials.event_calls',['event_calls'=>$event_calls,'title'=>'Chamdadas de Eventos'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                
                @if(isset($jobs_st))
                    @include('frontend.pages.students._partials.jobs_st',['jobs_st'=>$jobs_st,'title'=>'Vagas Estágio/Trainee'])
                @endif
                    
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if(isset($jobs))
                    @include('frontend.pages.students._partials.jobs',['jobs'=>$jobs,'title'=>'Vagas de Emprego'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if(isset($contests))
                    @include('frontend.pages.students._partials.contests',['contests'=>$contests,'title'=>'Concursos'])
                @endif

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
        dots:true,
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
