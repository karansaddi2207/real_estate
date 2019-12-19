<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userInfo = Socialite::driver('facebook')->user();
        //echo "<pre>";print_r($user);
        $findUser = User::where('name', $userInfo->name)->first();
        if($findUser)
        {
            Auth::login($findUser);
            return redirect('/');
        }
        else
        {
            $user = new User;
            $user->name = $userInfo->name ?  $userInfo->name : '';
            $user->email = strlen($userInfo->email) > 0 ? $userInfo->email : '';
            $user->password = bcrypt('ddddd');
            $user->save();
            Auth::login($user);
            return redirect('/');
        }
        
    }
}
