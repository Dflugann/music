<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music Scholl</title>

    <!-- Bootstrap Core CSS -->
    <link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">

    <!-- Custom Fonts -->
    <link href={{ asset("vendor/fontawesome-free/css/all.min.css") }} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href={{ asset("vendor/simple-line-icons/css/simple-line-icons.css") }} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{ asset("css/stylish-portfolio.min.css") }} rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">Music School</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">Lista Music</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="/admin">Administrador</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <!--<h1 class="mb-1 text-bold">Music Scholl</h1>-->
        <h1 class="mb-5 text-black-50">
            <em>Music Scholl</em>
        </h1>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Lista Musica</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>O melhor site de cadastro de musicas</h2>
                <p class="lead mb-5">Da uma olhada em nossa lista
                    <a class="js-scroll-trigger" href="#services">aqui</a>!</p>
                <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">Musicas</a>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Music Scholl</h3>
            <h2 class="mb-5">Lista de musicas</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6 mb-5 mb-lg-0">
              <i class="icon-music-tone"></i>
            </span>
                <table class="table table-responsive-lg ">
                    <tr>
                        <th>Compositor</th>
                        <th>Titulo</th>
                        <th>Genero</th>
                        <th>Gravadora</th>
                        <th>Cantor</th>
                        <th>Album</th>
                    </tr>
                    <tbody>
                    @foreach($musics as $music)
                    <tr>
                        <td><p class="text-faded mb-0">{{ $music->author }}</p></td>
                        <td><p class="text-faded mb-0">{{ $music->title }}</p></td>
                        <td><p class="text-faded mb-0">{{ $music->genre }}</p></td>
                        <td><p class="text-faded mb-0">{{ $music->record_company }}</p></td>
                        <td><p class="text-faded mb-0">{{ $music->interprete }}</p></td>
                        <td><p class="text-faded mb-0">{{ $music->album }}</p></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Music School 2018</p>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src={{ asset("vendor/jquery/jquery.min.js") }}></script>
<script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

<!-- Plugin JavaScript -->
<script src={{ asset("vendor/jquery-easing/jquery.easing.min.js") }}></script>

<!-- Custom scripts for this template -->
<script src={{ asset("js/stylish-portfolio.min.js") }}></script>

</body>

</html>
