<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the provider.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $provided_user = Socialite::driver($provider)->user();

        $users = User::where('provider', $provider)
            ->where('provided_user_id', $provided_user->id)
            ->first();

        if ($users === null) {
            // redirect confirm
            $users = User::create([
               'name'               => $provided_user->name,
               'provider'           => $provider,
               'provided_user_id'   => $provided_user->id,
               'profile'            => $provided_user->avatar,
            ]);
        }

        Auth::login($users);

        return redirect()->route('index');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}