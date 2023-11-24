<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
       
        if (auth()->user()->role_id === 1) {
            // return '/admin/dashboard'; // Redirect admin users to admin dashboard

            return route('admin.dashboard');
        } elseif (auth()->user()->role_id === 2) {
            return '/initiator/dashboard'; // Redirect initiator users to initiator dashboard
        } elseif (auth()->user()->role_id === 3) {
            return '/consultant/dashboard'; // Redirect consultant users to consultant dashboard
        }
        if(auth()->check()){

            return view('dashboard');
        }
        else{

            return url()->previous();
        }
        // Redirect normal users back to the previous page they were on
    }

    public function memberSignUp(){
        return view('auth.member-signup');
    }

    public function initiatorSignUp(){
        return view('auth.initiator-signup');
    }

    public function consultantSignUp(){
        return view('auth.consultant-signup');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
