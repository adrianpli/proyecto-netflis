<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculasmodel;

class AdminController extends Controller
{
    public function peliculas(){
        $peliculas = peliculasmodel::get();
        return view("peliculas",["peliculas" => $peliculas]);
    }
    public function agregarPeliula(){
        return view("agregarPelicula");
    }

    public function agregar(Request $datos){
        if(!$datos -> nombre || !$datos -> categoria || !$datos -> clasificacion || !$datos -> director || !$datos -> pelicula || !$datos -> resumen)
            return view("agregarPelicula",["estatus" => "error","mensaje" => "Falta informacion"]);

        $pelicula = peliculasmodel::where('NOMBRE',$datos->nombre)->first();
        if ($pelicula) return view("agregarPelicula",["estatus" => "error","mensaje" => "Esta pelicula ya esta registrada"]);

        $pelicula = new peliculasmodel();
        $pelicula -> NOMBRE = $datos -> nombre;
        $pelicula -> CATEGORIA = $datos -> categoria;
        $pelicula -> CLASIFICACION = $datos -> clasificacion;
        $pelicula -> DIRECTOR = $datos -> director;
        $pelicula -> PELICULA = $datos -> pelicula;
        $pelicula -> RESUMEN = $datos -> resumen;
        $pelicula -> save();

        return view("agregarPelicula", ["estatus" => "success","mensaje" => "Pelicula ".$datos->nombre." agregada exitosamente"]);
    }
}
