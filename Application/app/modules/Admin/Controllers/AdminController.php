<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 1/18/17
 * Time: 8:45 AM  App\Modules\Calendar\Controllers;
 */
namespace App\Modules\Admin\Controllers;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use EduMart\Http\Controllers\Controller;
///use App\Custom\Logging;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdminController extends Controller {

    public function index() {

//        $result = $this->getDashBoard(); //get dashboard content
//        $totalclients = DB::table('tenant')->count();//get total clients from the db
//        $totalsubscriptions = DB::table('subscription')->count();//get total clients from the db
//        $totalCount = $this->getTotals();//store the total from getTotals() method
//        return view('admin.index', compact('totalCount', 'totalclients', 'totalsubscriptions', 'result'));
        //$userID = Auth::user()->id;
        //return view('Admin::index',['userID'=> $userID]);

        return view('Admin::index');
    }
}