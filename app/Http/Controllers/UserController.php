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
        // return view('auth.login', ['alert' => $alert]);


 
        if ($request->email == null) {
            $alert = "Llena el email";
        } else {
            $userLogueado = User::where('email', $request->email)->first();

            // Le recomendamos crear cuenta por que ese usre no existe
            if (!$userLogueado) {
                return view('crear_cuenta');
            }
        }
        if ($request->password == null) {
            $alert = "Llena el password";
        }
        if ($request->email == null and $request->password == null) {
            $alert = "Llena los campos";
        }
        if (isset($alert)) {
            return view('auth.login', ['alert' => $alert]);
        }
        
        if ($request->email != null and $request->password != null) {
            $findEmail = User::where('email', $request->email)->first();

            // si existe en la base de datos el correo 
            if ($findEmail) {
                $userLogueado = User::where('email', $request->email)->where('password', $request->password)->first();

                // verificamos el password y email (entra y son correctos esos datos)
                if ($userLogueado) {
                    return $userLogueado;
                } else {
                    return "contraseña incorrecta";
                }
            }
        }
        
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
        $this->validate($request, [

            'email' => 'required',
            'password' => 'required',
        ]);

        $userAct = User::where('remember_token', $request->_token)->where('email', $request->email)->first();
        
        if (!$userAct) {
            
            // Si el user existe en la base de datos, no entra al if a crear el mismo user
            // _token
            $userLogueado = User::where('email', $request->email)->first();
            if (!$userLogueado) {

                $user=new User();        
                $user->name=$request->name;
                $user->apellido=$request->apellido;
                $user->telefono=$request->telefono;
                $user->genero=$request->genero;
                $user->email=$request->email;
                $user->email_verified_at=$request->email_verified_at;
                $user->cedula=$request->cedula;
                $user->password=$request->password;
                $user->remember_token=$request->_token;
                $user->current_team_id=$request->current_team_id;
                $user->profile_photo_path=$request->profile_photo_path;
                $user->id_roles=$request->id_roles;
                
                if($user->save()){

                    $userLogueado = $user;
                    return view('actualizacion_datos', compact('userLogueado'));
                }
            } else {

                $alert = "La dirección de correo ". $request->email. " ya esta registrada, Inicia sesión";
                return view('crear_cuenta', ['alert' => $alert]);
            }

        } else {

            $userLogueado = $userAct;
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
        $this->validate($request, [
            'name' =>'required',
            'apellido' =>'required',
            'telefono' =>'required',
            'cedula' =>'required',
            'genero' =>'required',
            'password' =>'required'
        ]);

        $findUser = User::where('email', $request->email)->first();
        if (!$findUser) {
            $user = User::findOrFail($id);
            $user->name=$request->input('name');
            $user->apellido=$request->input('apellido');
            $user->telefono=$request->input('telefono');
            $user->cedula=$request->input('cedula');
            $user->genero=$request->input('genero');
            $user->password=$request->input('password');
            $user->remember_token=$request->_token;

            if ($user->save()) {
                $userLogueado = $user;
                $cursosAprobado=Curso_Aprobado::all();
                return view('cursos_recibidos', compact('userLogueado'), compact('cursosAprobado'));
            }
        } else {
            return redirect('actualizacion_datos');
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
