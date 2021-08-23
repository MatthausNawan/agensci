@extends('layouts.frontend')

@section('content')

<div class="row">
    @include('frontend.pages.companies._partials.menu')
</div>

<div class="row">
    <div class="col-md-3 col-sm-12 p-1">
        @include('frontend.pages.companies._partials.dashboard')
        @include('frontend.pages.companies._partials.links',['title'=>'Links Importantes','links'=>$links,''])        
        @include('frontend.pages.companies._partials.jobs',['title'=>'Estagios Cadastrados','stages'=>$jobs,''])
        @include('frontend.pages.companies._partials.jobs',['title'=>'Treiness Cadastrados','trainees'=>$jobs,''])
        @include('frontend.pages.companies._partials.jobs',['title'=>'Empregos Cadastrados','jobs'=>$jobs,''])
    </div>

    <div class="col-md-9 col-sm-12 p-1">
        @include('frontend.pages.companies._partials.painel')        
        <div class="row mt-2">
            <div class="col-md-8 col-sm-12">                
                @if($event_calls)
                    @include('frontend.pages.teachers._partials.event_calls',['event_calls'=>$event_calls,'title'=>'Chamdadas de Eventos'])
                @endif               
                    <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
                @if($students_profiles)
                    @include('frontend.pages.students._partials.students_profiles',['students_profiles'=> $students_profiles,'title'=>'Portifólios de Estudantes'])
                @endif 
                <img src="https://via.placeholder.com/1033x300" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-sm-12">                
                @include('frontend.pages.companies._partials.events',['title'=>'Eventos Apoiados','events'=>$events,''])
                @include('frontend.pages.companies._partials.events',['title'=>'Eventos Patrocinados','events'=>$events,''])
                @include('frontend.pages.companies._partials.events',['title'=>'Eventos Parceiros','events'=>$events,''])
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
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
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
