@extends('layouts.frontend')


@section('content')
<div class="links-wrapper">    
    <div class="col-12"> 
        @include('frontend.pages.static._partials.default-painel')
    </div>

    <div class="col-12 mt-2">
        <p class="bg-dark text-white p-0 text-center text-uppercase">Divulge Aqui</p>
    </div>

    <div class="col-10 offset-1 border rounded">
        <p class="text-danger">Selecione a página clicando nas abas que deseja e clique sob o local onde quer anunciar.</p>
        <ul class="nav nav-tabs map-ul" id="myTab" role="tablist">        
                <li class="nav-item map-li">
                    <a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="1" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="2" aria-selected="true">Professor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="3" aria-selected="true">Estudante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="4" aria-selected="true">Professor Restrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="5" aria-selected="true">Estudante Restrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="6-tab" data-toggle="tab" href="#tab6" role="tab" aria-controls="6" aria-selected="true">Demais</a>
                </li>
            </li>        
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active map-content" id="tab1" role="tabpanel" aria-labelledby="1-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/home.png')}}" alt="Home-Meio-1" usemap="#home" class="img-responsive">
                    <map name="home" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>

            <div class="tab-pane  map-content" id="tab2" role="tabpanel" aria-labelledby="2-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/student.png')}}" alt="Home-Meio-1" usemap="#student" class="img-responsive">
                    <map name="student" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>
            <div class="tab-pane  map-content" id="tab3" role="tabpanel" aria-labelledby="3-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/teacher.png')}}" alt="Home-Meio-1" usemap="#teacher" class="img-responsive">
                    <map name="teacher" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>
            <div class="tab-pane  map-content" id="tab4" role="tabpanel" aria-labelledby="4-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/student.png')}}" alt="Home-Meio-1" usemap="#student-res" class="img-responsive">
                    <map name="student-res" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>
            <div class="tab-pane  map-content" id="tab5" role="tabpanel" aria-labelledby="5-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/teacher.png')}}" alt="Home-Meio-1" usemap="#teacher-res" class="img-responsive">
                    <map name="teacher-res" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>
            <div class="tab-pane  map-content" id="tab6" role="tabpanel" aria-labelledby="6-tab">
                <div class="col-lg-12 text-center mt-3">
                    <img src="{{ asset('images/default.png')}}" alt="Home-Meio-1" usemap="#default" class="img-responsive">
                    <map name="default" class="border">
                        <area shape="rect" coords="116,171,360,196" href="{{route('site.advertise.create',['l'=>'Home-Meio-1','id'=>'6']) }}" alt="">
                        <area shape="rect" coords="23,22,392,40" href="{{route('site.advertise.create',['l'=>'Home-Topo','id'=>'7']) }}" alt="">
                        <area shape="rect" coords="22,140,105,365" href="{{route('site.advertise.create',['l'=>'Home-Coluna-esquerda','id'=>'8']) }}" alt="">
                        <area shape="rect" coords="116,311,295,347" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'9']) }}" alt="">
                        <area shape="rect" coords="116,526,295,563" href="{{route('site.advertise.create',['l'=>'Home-Meio-2','id'=>'10']) }}" alt="">
                        <area shape="rect" coords="302,,295,397,749" href="{{route('site.advertise.create',['l'=>'Home-Coluna-Direita','id'=>'11']) }}" alt="">
                    </map>
                </div>
            </div>
            
            
        </div>
    </div>
</div>

@endsection