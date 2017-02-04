<?php

/*
    |--------------------------------------------------------------------------
    | Schools module route
    |--------------------------------------------------------------------------
    |
    | This route handles all requests to the visitor module 
    |
 */
//An admin area of the visitor module -- all admin request are made with the admin prefix
Route::group(array('prefix' => 'admin'), function()
{
    //authentication for admin
    Route::group(['middleware' => 'admin.user'],function()
    {
        //all objects of the visitor module must be within the visitor namespace
        Route::group(array('middleware'=>'web','module'=>'School','namespace' => 'App\Modules\School\Controllers'), function()
        {
            //Request for the visitor index page -- not a resource (API) call
            Route::get('/schools','SchoolController@index');
//            Route::get('/',function()
//            {
//                //return the visitor index page
                //return dd("Tested Ok");
//                return view("Admin::index");
//            });

            //Request for the property index page -- resource (API) call
//            Route::resource('/Admin', 'AdminController',
//                array('except' => array('create', 'edit')));
        });
    });
});