<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\SocialAccountService;

class SocialAuthController extends Controller
{
    //
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function callback(SocialAccountService $service,$provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider));
        auth()->login($user);
        return redirect()->to('/home');

        // $user->token;
    }
}
