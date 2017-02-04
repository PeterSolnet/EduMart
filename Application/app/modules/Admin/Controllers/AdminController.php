<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 2/3/17
 * Time: 11:11 AM
 */

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EduMart\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
