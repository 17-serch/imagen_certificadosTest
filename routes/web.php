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
    return view('login');
});

Route::get('actualizacion/', function () {
    return view('actualizacion_datos');
});

Route::get('cursos_recividos/', function () {
    return view('Cursos_Recividos');
});

Route::get('formulario/', function () {
    return view('formulario');
});

Route::get('mas_cursos/', function () {
    return view('mas_cursos');
});










// Login
// Actualizacion de datos
// Cursos recividos
// encuesta -> encuesta













// - colores

/*
6BAAE5
8CBE11
00C273
#2FBEC2
34D399
 * 
*/
// navegacion
// 200:'#8CBE11'
// contenido

// footer

// footer_pequeño
