@extends('layouts.frontend')

@section('content')

<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>


<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('auth.login_column',['title'=>'Painel do Estudante','route'=>'site.students.register'])

        <div class="my-2">
            <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
        </div>

        @include('frontend.pages.home._partials.external-links',['title'=>'Consulte Cursos','links'=>$cursos])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Acesse','links'=>$entidades])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Bibliotecas Digitais','links'=>$bibliotecas])
        @include('frontend.pages.home._partials.external-links-icon',['title'=>'Museus Virtuais','links'=>$museus])

    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.students._partials.painel')

        <div class="row mt-2">
            <div class="col-md-9 col-sm-12">

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.teachers._partials.news',['news'=>$news,'title'=>'Notícias'])

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.students._partials.profiles',['profiles'=> $profiles,'title'=>'Portifólios de Estudantes'])

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.students._partials.jobs',['jobs'=>$jobs,'title'=>'Vagas Estágio/Trainee'])

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.students._partials.jobs',['jobs'=>$jobs,'title'=>'Vagas de Emprego'])

                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @include('frontend.pages.students._partials.jobs',['jobs'=>$jobs,'title'=>'Concursos'])
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
