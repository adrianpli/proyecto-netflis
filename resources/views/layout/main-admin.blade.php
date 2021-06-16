<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>

    @yield('titulo')

    @yield('css')

</head>

<body id="page-top">

<nav style="background-color: #d52323;" class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: black; font-size: 1.1rem" aria-current="page" href="/"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black; font-size: 1.1rem" href="{{Route('peliculas')}}"><i class="far fa-file-video"></i></i> Peliculas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black; font-size: 1.1rem" href="#"><i class="fas fa-user-friends"></i> Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black; font-size: 1.1rem" href="#"><i class="fas fa-chart-bar"></i> Estadisticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black; font-size: 1.1rem" href="{{Route('agregarPelicula')}}"><i class="fas fa-file-download"></i> Administrar peliculas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-xl">
    @yield('titulo-pagina')

    @yield('contenido')

</div>

<footer class="text-center text-dark" style="background-color: #d52323; bottom: 0;width: 100%;">
    <div class="container p-4 pb-0">
        <section class="mb-4">
            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/jesusadrian.ramoshernandez.75/" role="button"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/adrianpli809/?hl=es-la" role="button"><i class="fab fa-instagram"></i></a>
            <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="https://github.com/adrianpli" role="button"><i class="fab fa-github"></i></a>
        </section>


    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1); color: black">
        © 2021 Copyright Adrian
    </div>
</footer>
@yield('js')
</body>

</html>
