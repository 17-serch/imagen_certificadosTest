<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

use App\Models\Curso_Aprobado;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->first();
        return view('actualizacion_datos', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name = $request->usuario;
        $password = $request->password;
        $user = User::where('name', $name)->where('password', $password)->first();

        if ($user) {
            return "credenciales correctas";
        } else {
            return "credenciales incorrectas";
        }
        // return $request->usuario;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // un request laravel trae toda la info del formulario
    public function store(Request $request)
    {
        if ($request->name==null or $request->password==null) {
            return redirect('crear_cuenta');
        }

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        $user=new User();        
        $user->name=$request->name;
        $user->apellido=$request->apellido;
        $user->telefono=$request->telefono;
        $user->genero=$request->genero;
        $user->email=$request->email;
        $user->email_verified_at=$request->email_verified_at;
        $user->cedula=$request->cedula;
        $user->password=$request->password;
        $user->current_team_id=$request->current_team_id;
        $user->profile_photo_path=$request->profile_photo_path;
        $user->id_roles=$request->id_roles;
        
        if($user->save()){
            $userLogueado = $user;
            
            return view('actualizacion_datos', compact('userLogueado'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    
        // $user=User::findf0rFail($id);
        // return new UserResource($user);
        return view('cursos_recibidos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('actualizacion_datos',compact('user'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name=$request->input('name');
        $user->apellido=$request->input('apellido');
        $user->telefono=$request->input('telefono');
        $user->cedula=$request->input('cedula');

        if ($user->save()) {
            $userLogueado = $user;


            $cursoAprobado=Curso_Aprobado::all();

            return view('cursos_recibidos', compact('userLogueado'), compact('cursoAprobado'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->delete()){
            return new UserResource($user);
        }
    }
}
