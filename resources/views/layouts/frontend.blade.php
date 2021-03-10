<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Agensci</title>

    <!-- Custom styles for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"> -->


    <link href="{{ asset('frontend/css/agensci.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        .slick-prev:before,
        .slick-next:before {
            color: #0E274C
        }
    </style>
</head>

<body>
    <div class="nav-scroller bg-dark">
        <div class="container">
            <nav class="nav d-flex justify-content-start align-items-center">
                <img src="{{ asset('assets/images/logo-branco.png')}}" alt="agency-logo" class="nav-logo">
                <a class="p-3 text-white" href="{{ route('site.home') }}">Home</a>
                <a class="p-3 text-white" href="{{ route('site.teachers') }}">Professores</a>
                <a class="p-3 text-white" href="{{ route('site.students') }}">Estudantes</a>
                <a class="p-3 text-white" href="{{ route('site.companies.register') }}">Empresas</a>
                <a class="p-3 text-white" href="{{ route('site.advertise') }}">Anuncie</a>
                @auth
                <a class="btn btn-secondary btn-sm" href="{{Auth::user()->painel['route']}}">Painel {{Auth::user()->painel['name']}}</a>
                @endauth
            </nav>
        </div>
    </div>
    <main role="main" class="container">
        @include('layouts._partials.messages')

        @yield('content')
    </main>


    <footer class="bg-dark mt-1">
        <div class="container d-flex justify-content-between align-items-center">
            <nav class="nav">
                <a class="p-3 text-white" href="#">Quem somos</a>
                <a class="p-3 text-white" href="#">Termos de Uso</a>
                <a class="p-3 text-white" href="#">Politica de Privacidade</a>
                <a class="p-3 text-white" href="#">Contato</a>
            </nav>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @yield('js')
</body>

</html>
