<?php

namespace EduMart\Http\Controllers;

use Illuminate\Http\Request;
use EduMart\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.user');
    }

    public function index(Request $request)
    {
        if(!Auth::guard('admin_user')->user())
        {
            abort(401);
        }
        return view('admin-home');
    }

}
