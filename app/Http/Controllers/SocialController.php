<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialController extends Controller
{
    public function redirect () {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function callback () {
        $facebook = Socialite::driver('facebook')->user();
        $user = User::whereEmail($facebook->getEmail())->first();    

        if (!$user) {
            $user = User::create([
                'email' => $facebook->getEmail(),
                'name' => $facebook->getName(),
                'password' => '<no_pass>',
            ]);
        }

        auth()->login($user);

        return redirect()->to('/');
    }
}
