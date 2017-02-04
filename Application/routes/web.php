<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/login', function () {
    if(Auth::check())
    {
        return view('/home');
    }
    else
    {
        return view('auth.login');
    }
    return view('auth.login');
});


Auth::routes();

Route::get('/admin-home', 'AdminHomeController@index');
Route::GET  ('admin_login','AdminAuth\LoginController@showLoginForm');
Route::POST ('admin_login','AdminAuth\LoginController@login');
Route::POST ('admin_logout','AdminAuth\LoginController@logout');
Route::POST ('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::GET  ('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::POST ('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::GET  ('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
Route::GET  ('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::POST ('admin_register','AdminAuth\RegisterController@create');



Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    if(Auth::check())
    {
    return view('/home');
    }
    elseif(Auth::guard('admin_user')->user())
    {
        return view('/admin-home');
    }
    else
    {
        return view('auth.login');
    }
});







