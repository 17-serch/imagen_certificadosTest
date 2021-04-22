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



Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login', function () {
    return view('auth/login');
});

// nos loguea con redes sociales
Route::get('login/{driver}', [SocialController::class, 'facebookRedirect']);
Route::get('login/{driver}/callback', [SocialController::class, 'loginWithFacebook']);

// nos lleva a la pantalla de crear cuenta
Route::get('/crear_cuenta', function(){
    return view('crear_cuenta');
});

Route::resource('user', UserController::class);

Route::resource('cursos', CursoAprobadoController::class);

Route::resource('mas_cursos', MasCursosController::class);

Route::get('formulario', [EncuestaController::class, 'index']);























// muestra 
Route::get('cursos_recibidos', [CursoAprobadoController::class, 'index']);


// nos lleva a la pantalla de actualizacion de datos
Route::get('/actualizacion_datos', function(){
    return view('actualizacion_datos');
});





Route::get('nuevos_cursos', [CursoNuevoController::class, 'index']);

Route::get('subir_certificados', [CertificadoController::class, 'index']);

