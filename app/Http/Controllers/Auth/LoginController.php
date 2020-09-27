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
        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:franchise')->except('logout');
    }

     public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'alloom']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => __('auth.failed')
        ]);
    }

     public function showFranchiseUserLoginForm()
    {
        return view('auth.login', ['url' => 'cliente']);
    }

    public function franchiseUserLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('franchise')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended(RouteServiceProvider::TENANT_HOME);
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => __('auth.failed')
        ]);
    }
}
