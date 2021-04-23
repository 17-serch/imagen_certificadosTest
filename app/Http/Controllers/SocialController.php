<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Socialite;
use Exception;
use Auth;
use App\Models\SocialProfile;
use App\Models\User;
use App\Models\Curso_Aprobado;


use App\CursoAprobadoController;

class SocialController extends Controller
{
    public function facebookRedirect($driver)
    {
        $drivers = ['facebook', 'google'];

        if (in_array($driver, $drivers)) {
            return Socialite::driver($driver)->redirect();
        } else {
            return redirect('login')->with('info',$driver.' no es una aplicación valida para poder loguearse');
        }
    }
    public function loginWithFacebook(Request $request, $driver)
    {
        if ($request->get('error')){
            return redirect('auth.login');
        }

        $findUser = User::where('email', $request->email)->first();
        if ($findUser) {
            return "El user si existe";
        }

        // extraemos usuario de con el modelo Socialite
        $userSocialite = Socialite::driver($driver)->user();

        // verificamos si existe o no el usuario ( si exite va a cursos recibidos, si no existe entra y crea el user )
        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())->where('social_name', $driver)->first();
        if (!$social_profile) {
            
            $user = User::where('email', $userSocialite->email)->first();
            
            if (!$user) {
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email' => $userSocialite->getEmail(),
                    'fb_id' => $userSocialite->getId(),
                    ]);
            }

            $social_profile = SocialProfile::create([
                'user_id'=>$user->id,
                'social_id'=>$userSocialite->getId(),
                'social_name'=>$driver,
                'social_avatar'=>$userSocialite->getAvatar()
            ]);
            auth()->login($user);
            return redirect('actualizacion_datos');
        }

        // traemos todos los cursos que aprobo
        $allCourses = Curso_Aprobado::all();

        // buscamos al usuario con ese email para darle acceso
        $user = User::where('email', $userSocialite->getEmail())->first();
       
        auth()->login($user);
        return redirect('cursos_recibidos');
    }
}
