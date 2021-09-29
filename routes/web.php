<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//rutas con funcion
Route::get('cursos', function () {
    return ('Bienvenido al curso de laravel');
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso de $curso";
});

Route::get('/mipag', function () {
    return view ('mipag');
});
//rutas con vistas 
Route::get('/mipag', function () {
    return view ('mipag');
});

Route::get('/producto', function () {
    return view ('producto');
});