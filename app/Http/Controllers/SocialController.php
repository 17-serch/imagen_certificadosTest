<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function facebookRedirect($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function loginWithFacebook($driver)
    {
        $user = Socialite::driver($driver)->user();
    }
}