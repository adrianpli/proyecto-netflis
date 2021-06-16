<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('admin-inicio');
});

Route::get('/peliculas', [AdminController::class, 'peliculas']) -> name('peliculas');
Route::get('/Agregar', [AdminController::class, 'agregarPeliula']) -> name('agregarPelicula');

Route::post('/agregar',[AdminController::class, 'agregar']) -> name('agregar.form');
