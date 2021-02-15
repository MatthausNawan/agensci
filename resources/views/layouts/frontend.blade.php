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
    @yield('styles')
</head>

<body>


    <div class="container mt-1">
        <div class="nav-scroller bg-dark">
            <nav class="nav d-flex justify-content-start">
                <a class="p-3 text-white" href="#">Home</a>
                <a class="p-3 text-white" href="#">Professores</a>
                <a class="p-3 text-white" href="#">Estudantes</a>
                <a class="p-3 text-white" href="#">Empresas</a>
                <a class="p-3 text-white" href="#">Anuncie</a>
            </nav>
        </div>
    </div>

    <main role="main" class="container">


        <div class="main-banner mb-2 p-3">
            <img src="https://via.placeholder.com/1366x200" alt="" class="img-rounded" width="100%" height="200">
        </div>
        @yield('content')

    </main><!-- /.container -->





    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    @yield('scrips')
</body>

</html>
