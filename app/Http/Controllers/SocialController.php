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
            return redirect('login');
        }

        $findUser = User::where('email', $request->email)->first();
        if ($findUser) {
            return "El user si existe";
        }


        $userSocialite = Socialite::driver($driver)->user();

        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())->where('social_name', $driver)->first();
        
        if ($social_profile) {
            $userLogueado = User::where('email', $userSocialite->email)->get();
            $userLogueado = $userLogueado[0];
        }
        
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
            
            $userLogueado = $user;
            return view('actualizacion_datos', compact('userLogueado'));
        }

        $cursosAprobado=Curso_Aprobado::all();
        return view('cursos_recibidos', compact('userLogueado'), compact('cursosAprobado'));

    }
}
