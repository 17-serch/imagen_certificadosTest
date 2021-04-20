<?php

namespace App\Http\Controllers;

use App\Models\Curso_Nuevo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class MasCursosController extends Controller
{
    public function index(Request $id) {

        $cursosNuevo = Curso_Nuevo::all();
        $userLogueado = User::all()->first();
        return view('mas_cursos', compact('cursosNuevo'), compact('userLogueado'));
    }
}
