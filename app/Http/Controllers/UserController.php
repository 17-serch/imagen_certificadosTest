<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->apellido=$request->apellido;
        $user->telefono=$request->telefono;
        $user->genero=$request->genero;
        $user->email=$request->email;
        $user->email_verified_at=$request->email_verified_at;
        $user->password=$request->password;
        $user->current_team_id=$request->current_team_id;
        $user->profile_photo_path=$request->profile_photo_path;
        $user->id_roles=$request->id_roles;
        if($user->save()){
            return new UserResource($user);
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
        $user=User::findf0rFail($id);
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return $user;   
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
        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->apellido=$request->apellido;
        $user->telefono=$request->telefono;
        $user->genero=$request->genero;
        $user->email=$request->email;
        $user->email_verified_at=$request->email_verified_at;
        $user->password=$request->password;
        $user->current_team_id=$request->current_team_id;
        $user->profile_photo_path=$request->profile_photo_path;
        $user->id_roles=$request->id_roles;
        if($user->save()){
            return new UserResource($user);
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
