<?php

namespace App\Http\Controllers\Auth;

use Hash;
use Session;
use App\Role;
use App\Initiator;
use App\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    protected function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user_type = $request->membertype;

        if ($user_type == "initiator") {
            $initiator = Initiator::where('email', $request->email)->first();

            if ($initiator && Hash::check($request->password, $initiator->password)) {
                $request->session()->put('loginId', $initiator->id);
                return redirect()->route('initiator.dashboard');
            } else {
                return redirect()->back()->with('fail', 'Wrong Password');
            }
        } elseif ($user_type == "consultant") {
            $consultant = Consultant::where('email', $request->email)->first();

            if ($consultant && Hash::check($request->password, $consultant->password)) {
                // Assuming you have a route named 'consultant.dashboard'
                return redirect()->route('consultant.dashboard');
            } else {
                return redirect()->back()->with('fail', 'Wrong Password');
            }
        } else {
            return back()->with('fail', 'The email is not registered');
        }
    }


    public function memberSignUp(){
        return view('auth.member-signup');
    }

    public function initiatorSignUp(){

        $role = Role::where('name', 'initiator')->pluck('id')->first();

        return view('auth.initiator-signup', compact('role'));
    }

    public function consultantSignUp(){

        $role = Role::where('name', 'consultant')->pluck('id')->first();

        return view('auth.consultant-signup', compact('role'));
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
