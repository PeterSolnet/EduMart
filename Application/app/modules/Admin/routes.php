<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*
    |--------------------------------------------------------------------------
    | Visitor module route
    |--------------------------------------------------------------------------
    |
    | This route handles all requests to the visitor module 
    |
 */

//
//
//An admin area of the visitor module -- all admin request are made with the admin prefix
Route::group(array('prefix' => 'admin'), function()
 {
    //authentication for admin
    Route::group(['middleware' => ['web', 'auth']],function()
    {
        //all objects of the visitor module must be within the visitor namespace
        Route::group(array('module'=>'Admin','namespace' => 'App\Modules\Admin\Controllers'), function()
        {
            //Request for the visitor index page -- not a resource (API) call
            Route::get("/", 'AdminController@index');
//            Route::get('/',function()
//            {
//
//                return view("Admin::index");
//                if(Auth::check())
//                {
//                    //dd("yuub");
//
//                }
//                else
//                {
//                    //return redirect('/login');
//                   //  view("auth.login");
//                }
//                //return the visitor index page
//
//            });

            //Request for the property index page -- resource (API) call
//            Route::resource('/visitors', 'VisitorController',
//                array('except' => array('create', 'edit')));
        });
    });
 });
