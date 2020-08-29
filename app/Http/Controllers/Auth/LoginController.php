<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:alloom_customer_user')->except('logout');
        $this->middleware('guest:alloom_user')->except('logout');
    }

     public function showAlloomUserLoginForm()
    {
        return view('auth.login', ['url' => 'alloom']);
    }

    public function alloomUserLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('alloom_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/alloom/dash');
        }
        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => "Email e/ou senha incorreto(s) :p"
        ]);
    }

     public function showAlloomCustomerUserLoginForm()
    {
        return view('auth.login', ['url' => 'cliente']);
    }

    public function alloomCustomerUserLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('alloom_customer_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/cliente/dash');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => "Email e/ou senha incorreto(s) :p"
        ]);
    }
}
