<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//homepage route
Route::get('/', function () {
    return view('front.index');
});

//admin routes
Route::get("/register/client","RegisterController@client");
Route::get("/admin/dashboard","AdminController@dashboard");
Route::get("/admin/pending_registration","AdminController@pending_registration");

//reoute for registeration via front end
Route::resource("/register","RegisterController");
