@extends('layout.main-admin')

@section('titulo')
    <title>Menu - Administrador</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Bienvenido administrador</h1>
@endsection

@section('contenido')

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a href="#" style="color: #000000; text-decoration: none;">
            <div class="card h-100">
                <center>
                <img src="https://image.flaticon.com/icons/png/512/32/32441.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                     </div>
                </center>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="#" style="color: #000000; text-decoration: none;">
            <div class="card h-100">
                <center>
                    <img src="https://conamer.gob.mx/images/iconos-transparencia/2.png" class="card-img-top" height="100%">
                    <div class="card-body">
                        <h5 class="card-title">Estadisticas</h5>
                    </div>
                </center>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="{{Route('peliculas')}}" style="color: #000000; text-decoration: none;">
            <div class="card h-100">
                <center>
                    <img src="https://www.inefso.com/wp-content/uploads/2020/07/vinilo-carrete-pelicula-cine.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Peliculas</h5>
                    </div>
                </center>
            </div>
                </a>
        </div>

        <div class="col">
            <a href="{{Route('agregarPelicula')}}" style="color: #000000; text-decoration: none;">
            <div class="card h-100">
                <center>
                    <img src="https://img.icons8.com/ios-glyphs/452/add-file.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Agregar pelicula</h5>
                    </div>
                </center>
            </div>
            </a>
        </div>

    </div>

@endsection

@section('js')


@endsection


