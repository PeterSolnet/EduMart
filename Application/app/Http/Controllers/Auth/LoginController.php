<?php

namespace EduMart\Http\Controllers\Auth;

use EduMart\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Symfony\Component\HttpFoundation\Request;


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
//    use AuthenticatesUsers {
//        logout as performLogout;
//    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function logout(Request $request)
//    {
//        $this->performLogout($request);
//        return redirect()->route('/login');
//    }


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

//    public function logout(Request $request)
//    {
//        dd("admin");
//        $this->guard()->logout();
//        $request->session()->flush();
//        $request->session()->regenerate();
//        return redirect("/login");
//    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}
