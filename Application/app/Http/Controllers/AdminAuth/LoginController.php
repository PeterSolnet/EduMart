<?php

namespace EduMart\Http\Controllers\AdminAuth;

use EduMart\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/admin-home';

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

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin-auth.login');
    }

    public function guard()
    {
        return Auth::guard('admin_user');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect("/admin_login");
    }

//    public function login(Request $request){
//        //dd($request);
//        $input = $data = $request->all();
//        if(count($input) > 0){
//            $auth = auth()->guard('admin_user');
//            $credentials = [
//                'email' =>  $input['email'],
//                'password' =>  $input['password'],
//            ];
//
//            if ($auth->attempt($credentials))
//            {
//                return redirect()->action('LoginController@showLoginForm');
//            } else
//            {
//                echo 'Error';
//            }
//        } else {
//            return view('admin.login');
//        }
//    }


}
