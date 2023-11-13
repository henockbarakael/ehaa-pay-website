<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Brian2694\Toastr\Facades\Toastr;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request){   

        $input = $request->all();

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // if(Auth::attempt(['email'=>'admin@ehaa-pay.com','password'=>$input['password']])){
        //     if (Auth::user()->is_admin == 0) {
        //         return redirect()->route('admin.dashboard');
        //     }else if (Auth::user()->is_admin == 1) {
        //         return redirect()->route('merchant.dashboard');
        //     }else{
        //         return redirect()->route('login');
        //     }
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Username or password is incorrect.');
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Toastr::success('Vous avez été déconnecté(e).','Logout');

        return redirect('login');
    }
}
