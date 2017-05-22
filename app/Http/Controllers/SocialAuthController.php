<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $fbuser = Socialite::driver('facebook')->user();
        
        $user = User::whereEmail($fbuser->getEmail())->first();    
        if (!$user) {
            $user = User::create([
                'email' => $fbuser->getEmail(),
                'name' => $fbuser->getName(),
                'password' => '<no_pass>',
            ]);
        }
        auth()->login($user);

        return redirect()->to('/home');
    }


}
