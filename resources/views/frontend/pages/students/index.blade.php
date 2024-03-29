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
                @if(isset($posts))
                    @include('frontend.pages.teachers._partials.news',['posts'=>$posts,'title'=>'Notícias'])
                @endif
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if(isset($students_profiles))
                    @include('frontend.pages.students._partials.students_profiles',['students_profiles'=> $students_profiles,'title'=>'Portifólios de Estudantes'])
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

            <div class="col-md-3 col-sm-12 p-0">
                <div class="row">
                    <div class="col-12 mb-2">
                        @include('frontend.pages.home._partials.products-and-services',['products'=>$products,'title'=>'','services'=>false,'header'=>false])
                    </div>
                </div>
                <img src="https://via.placeholder.com/300x800" class="img-fluid" alt="Responsive image">
                <div class="row">
                    <div class="col-12 mt-2">
                        @include('frontend.pages.home._partials.products-and-services',['products'=>$services,'title'=>'','products'=>false,'header'=>false])
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

@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
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
                items:1
            }
        }
    })   

</script>
@endsection
