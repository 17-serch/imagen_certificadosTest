<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

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
    return view('auth/login');
});
Route::get('login/', function () {
    return view('auth/login');
});

Route::get('crear_cuenta/', function () {
    return view('crear_cuenta');
});

Route::get('actualizacion_datos/', function () {
    return view('actualizacion_datos');
});

Route::get('cursos_recibidos/', function () {
    return view('cursos_recibidos');
});

Route::get('formulario/', function () {
    return view('formulario');
});

Route::get('mas_cursos/', function () {
    return view('mas_cursos');
});

Route::get('nuevos_cursos/', function () {
    return view('nuevos_cursos');
});

Route::get('subir_certificados/', function () {
    return view('subir_certificados');
});



Route::get('auth/{driver}', [SocialController::class, 'facebookRedirect']);

Route::get('auth/{driver}/callback', [SocialController::class, 'loginWithFacebook']);

