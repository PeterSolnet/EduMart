<?php

namespace EduMart\Http\Controllers\AdminAuth;

use EduMart\AdminUser;
use Auth;
use League\Flysystem\Exception;
use Validator;
use EduMart\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

//dd($request);
//
//        Profile::where('id','=',$id)
//            ->update([
//                'name'        => $request->input('profilename'),
//                'description' => $request->input('profiledescription')
//            ]);

        //$this->validator($request->all())->validate();

        $adminuser = $this->create($request->all());

        //$this->guard('admin_user')->login($adminuser);

        return redirect($this->$redirectTo);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        try
        {
            $data = $request->all();
            $Admin_User = AdminUser::where('email', '=', $data['email'])->first();
            if($Admin_User)
            {
                return redirect('/admin_login')->with(["status"=>"User exist in database.","error_code"=>"01"]);
            }
            else
            {
                //dd($data);
                AdminUser::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'remember_token' => $data['_token'],
                ]);
                return redirect('/admin_login')->with(["status"=>"Successfully added admin user.","success_code"=>"00"]);
            }
        }
       catch(Exception $e)
       {
           return redirect('/admin_login')->with(["status"=>$e->getMessage(),"error_code"=>"01"]);
       }


    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
