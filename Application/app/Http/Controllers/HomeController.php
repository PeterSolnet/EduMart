<?php

namespace EduMart\Http\Controllers;

use EduMart\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use EduMart\School;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // get list of all profiles in the tenant
        $school_name = \App\school::where('id', (int)Auth::user()->school_id)
            ->orderBy('name', 'desc')
            ->get(['name','logo']);
        //$profile = \EduMart\User::School((int)Auth::user()->school_id)->get();
        //Append Access control to profile object
        //$profile['Access_level']= $result;
        //return response()->json($school_name);


        if (Auth::check())
        {
            return view('home');
        }
        else
        {
            return view('auth.login');
        }
    }
}
