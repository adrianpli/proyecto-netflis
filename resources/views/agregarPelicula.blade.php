@extends('layout.main-admin')

@section('titulo')
    <title>Agregar pelicula - Administrador</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
@endsection

@section('titulo-pagina')
    <h1 class="h1 mb-4 text-gray-800 text-center">Agregar pelicula</h1>
@endsection

@section('contenido')

    @if(isset($estatus))
        @if($estatus == "success")
            <label class="text-success">{{$mensaje}}</label>
        @elseif($estatus == "error")
            <label class="text-warning">{{$mensaje}}</label>
        @endif
    @endif

    <form class="row g-3 justify-content-center" action="{{route("agregar.form")}}" method="post">
        {{csrf_field()}}
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre de la pelicula</label>
            <input type="text" class="form-control" id="inputEmail4" name="nombre">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Director</label>
            <input type="text" class="form-control" id="inputPassword4" name="director">
        </div>

        <div class="col-md-6">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                <select class="form-select" id="inputGroupSelect01" name="categoria">
                    <option selected>Seleccionar</option>
                    <option value="Terror">Terror</option>
                    <option value="Accion">Accion</option>
                    <option value="Comedia">Comedia</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Clasificacion</label>
                <select class="form-select" id="inputGroupSelect02" name="clasificacion">
                    <option selected>Seleccionar</option>
                    <option value="AA">AA</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="B15">B15</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Link pelicula</label>
            <input type="text" class="form-control" id="inputCity" name="pelicula">
        </div>
        <label for="inputCity" class="form-label">Resumen de la pelicula</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="resumen" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Resumen</label>
        </div>
        <center>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Agregar pelicula</button>
        </div>
        </center>
    </form>
<br>
@endsection

@section('js')

@endsection


