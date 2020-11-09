<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


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
    function redirectTo(){
            $redirectTo= RouteServiceProvider::HOME;
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:candidat')->except('logout');
            $this->middleware('guest:employeur')->except('logout');
    }

     public function showCandidatLoginForm()
    {
        return view('auth.login2', ['url' => 'candidat']);
    }

    public function candidatLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('candidat')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/jobpost');
        }
        return back()->withInput($request->only('email', 'remember'));

    }
     public function showEmployeurLoginForm()
    {
        return view('auth.login', ['url' => 'employeur']);
    }

    public function employeurLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('employeur')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/employeur');
        }
        return back()->withInput($request->only('email', 'remember'));

    }
}