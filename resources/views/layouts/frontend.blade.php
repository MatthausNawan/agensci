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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">


    <link href="{{ asset('frontend/css/agensci.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Agensci</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2 bg-primary">
            <nav class="nav d-flex justify-content-start">
                <a class="p-2 text-white" href="#">Home</a>
                <a class="p-2 text-white" href="#">Professores</a>
                <a class="p-2 text-white" href="#">Estudantes</a>
                <a class="p-2 text-white" href="#">Empresas</a>
                <a class="p-2 text-white" href="#">Anuncie</a>
            </nav>
        </div>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Anuncio</h1>
                <p class="lead my-3">Descricao do Anuncio</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>

        <!-- <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Post title</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                </div>
            </div>
        </div> -->
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-3 blog-main">
                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Pesquisar Artigos
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <div class="publicidade">
                    <img src="https://via.placeholder.com/300x800" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Consulte
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Acesse
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <h3>Consulte Instituicoes</h3>
                <hr>
                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Publicas
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Particulares
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>

                <div class="articles">
                    <h4 class="pb-3 mb-4 font-italic border-bottom">
                        Internacionais
                    </h4>
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <div class="event-banner">
                            <img src="https://via.placeholder.com/600x380" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search">
                            <form action="" class="form">
                                <div class="form-group">
                                    <label for="" class="text-white">Areas</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">AREAS</option>
                                        <option value="">AREAS</option>
                                        <option value="">AREAS</option>
                                        <option value="">AREAS</option>
                                        <option value="">AREAS</option>
                                        <option value="">AREAS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Categorias</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Categorias</option>
                                        <option value="">Categorias</option>
                                        <option value="">Categorias</option>
                                        <option value="">Categorias</option>
                                        <option value="">Categorias</option>
                                        <option value="">Categorias</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Paises</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Paises</option>
                                        <option value="">Paises</option>
                                        <option value="">Paises</option>
                                        <option value="">Paises</option>
                                        <option value="">Paises</option>
                                        <option value="">Paises</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white">Estados</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Estados</option>
                                        <option value="">Estados</option>
                                        <option value="">Estados</option>
                                        <option value="">Estados</option>
                                        <option value="">Estados</option>
                                        <option value="">Estados</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-2">
                        <img src="https://via.placeholder.com/1000x350" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="row p-1">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Humanas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Exatas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Natureza</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-group">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-group">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="card-group">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150x100" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="row p-1">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Humanas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Exatas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Natureza</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <img src="https://via.placeholder.com/1000x350" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Humanas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Exatas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Natureza</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <img src="https://via.placeholder.com/1000x350" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="articles">
                            <h4 class="pb-3 mb-4 font-italic border-bottom">
                                Pesquisar Artigos
                            </h4>
                            <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                            <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                            <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                            <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
                        </div>
                        <div class="publicidade">
                            <img src="https://via.placeholder.com/300x800" class="img-fluid img-thumbnail" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main><!-- /.container -->
    <div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Publicidade</h1>
                <p class="lead my-3">Descricao do Anuncio</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
        <div class="nav-scroller py-1 mb-2 bg-primary">
            <nav class="nav d-flex justify-content-start">
                <a class="p-2 text-white" href="#">Home</a>
                <a class="p-2 text-white" href="#">Professores</a>
                <a class="p-2 text-white" href="#">Estudantes</a>
                <a class="p-2 text-white" href="#">Empresas</a>
                <a class="p-2 text-white" href="#">Anuncie</a>
            </nav>
        </div>
    </div>


    <!-- <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer> -->

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    @yield('scrips')
</body>

</html>
