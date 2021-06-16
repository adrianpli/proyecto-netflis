@extends('layout.main-admin')

@section('titulo')
    <title>Peliculas - Administrador</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Peliculas en UPteflix</h1>
@endsection

@section('contenido')

    <table class="table table-sm table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Director</th>
            <th scope="col">Categoria</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Link</th>
            <th scope="col">Resumen</th>
            <th scope="col">Agregada</th>
        </tr>
        </thead>
        <tbody>
        @foreach($peliculas as $pelicula)
        <tr>
            <td>{{$loop -> index + 1}}</td>
            <td>{{$pelicula -> NOMBRE}}</td>
            <td>{{$pelicula -> DIRECTOR}}</td>
            <td>{{$pelicula -> CATEGORIA}}</td>
            <td>{{$pelicula -> CLASIFICACION}}</td>
            <td><a href="{{$pelicula -> PELICULA}}">{{$pelicula -> PELICULA}}</a></td>
            <td>{{$pelicula -> RESUMEN}}</td>
            <td>{{$pelicula -> created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection

@section('js')

@endsection


