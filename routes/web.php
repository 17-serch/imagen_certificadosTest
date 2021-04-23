<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ActualizarDatosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoAprobadoController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\MasCursosController;
use App\Http\Controllers\CursoNuevoController;
use App\Http\Controllers\CertificadoController;

Route::get('createUser', [UserController::class, 'store'])->name('createUser');
Route::get('checkUser', [UserController::class, 'create'])->name('checkUser');
Route::put('updateUser/{id}', [UserController::class, 'update'])->name('updateUser');
Route::get('masCursos', [MasCursosController::class, 'index'])->name('masCursos');
Route::get('logout', [UserController::class, 'log'])->name('logout');


Route::get('/', function () {
    return view('auth/login');
});

Route::get('login', function () {
    return view('auth/login');
});












// redirige al usuario ya existente a cursos recibidos
Route::get('login/{driver}', [SocialController::class, 'facebookRedirect']);

// crea usuario de redes sociales
Route::get('login/{driver}/callback', [SocialController::class, 'loginWithFacebook']);

// Comienza devolución de vistas
Route::get('actualizacion_datos', function () {
    return view('auth/actualizacion_datos');
});

Route::get('crear_cuenta', function () {
    return view('auth/crear_cuenta');
});

Route::get('cursos_recibidos', function () {
    return view('auth/cursos_recibidos');
});

Route::get('formulario', function () {
    return view('auth/formulario');
});

Route::get('mas_cursos', function () {
    return view('auth/mas_cursos');
});

Route::get('nuevos_cursos', function () {
    return view('auth/nuevos_cursos');
});

Route::get('subir_certificados', function () {
    return view('auth/subir_certificados');
});
// Termina devolución de vistas

