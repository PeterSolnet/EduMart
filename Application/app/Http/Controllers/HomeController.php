<?php

namespace EduMart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       // dd (Auth::user()->name);

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