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
        // $user = User::all()->first();
        // return view('actualizacion_datos', compact('user'));
        return "Estas en index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if ($request->email == null) {
            $alert = "Llena el email";
        } else {
            $user = User::where('email', $request->email)->first();

            // Le recomendamos crear cuenta por que ese usre no existe
            if (!$user) {
                $emailIncorrect = $request->email;
                $alert = "El email ". $emailIncorrect. " no esta registrado. Crea una cuenta con aquel email";
                return view('auth.crear_cuenta', ['alert' => $alert]);
            }
        }
        if ($request->password == null) {
            $user = User::where('email', $request->email)->first();

            // verifica si este user existe  en la base de datos
            if ($user) {
                $alert = $user->name. " llena el campo de contraseña";
            } else {
                $alert = "Llena el campo de contraseña";
            }
        }
        if ($request->email == null and $request->password == null) {
            $alert = "Llena todos los campos";
        }
        if (isset($alert)) {
            return view('auth.login', ['alert' => $alert]);
        }
        
        if ($request->email != null and $request->password != null) {
            $findEmail = User::where('email', $request->email)->first();

            // si existe en la base de datos el correo 
            if ($findEmail) {
                $user = User::where('email', $request->email)->where('password', $request->password)->first();

                // verificamos el password y email (entra y son correctos esos datos)
                if ($user) {
                    // $cursosAprobado=Curso_Aprobado::all();
                    // return view('auth.cursos_recibidos', compact('cursosAprobado'));
                    
                    auth()->login($user);
                    return redirect('cursos_recibidos');
                 
                } else {
                    $user = User::where('email', $request->email)->first();
                    $alert = $user->name. " tu contraseña es incorrecta";
                    return view('auth.login', ['alert' => $alert]);
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

        // Si el user existe en la base de datos, no entra al if a crear el mismo user
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

                // logueamos al usuario validado
                auth()->login($user);
                // redireccionamos a otra vista
                return redirect('actualizacion_datos');
            }

        } else {
            // mensaje de correo existente
            $alert = "La dirección de correo ". $request->email. " ya esta registrada. Inicia sesión";
            return view('auth/crear_cuenta', ['alert' => $alert]);
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
                // return view('auth.cursos_recibidos', compact('cursosAprobado'));

                return redirect('cursos_recibidos');
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

    // mas metodos aprate de los que se crean por default
    // metodo para cerrar sessión
    public function logoutUser(Request $request) {

        // ingresa a la session y genera una nueva
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // borra datos dek usuario logueado
        auth()->logout();
        return redirect('login');
    }

    // metodo para cerrar sesión a los usuarios de redes sociales
    public function logoutUserSocialNetwork () {
        return redirect('login');
    }

    // muestra los cuersos aprobados del usuario
    public function cursosAprobados () {
        $cursosAprobado = Curso_Aprobado::all();
        return view('auth.cursos_recibidos', compact('cursosAprobado'));
    }

    public function updatePageReceivedCourses () {
        return "refrescaste la paguina";
    }

}
