<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller{

    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $users = Socialite::driver('google')->user();
        return dd($users);
    }
}