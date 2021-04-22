<?php

namespace App\Http\Controllers;

use App\Models\Curso_Nuevo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class MasCursosController extends Controller
{
    public function index(Request $request)
    {
        $userLogueado = User::where('id', $request->id)->first();
        $cursosNuevo=Curso_Nuevo::all();

        return view('mas_cursos', compact('userLogueado'), compact('cursosNuevo'));
    }
}
