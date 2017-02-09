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
Route::get("/admin","AdminController@admin");
Route::get("/user/create","AdminController@create");
Route::get("/role/create","AdminController@role");
Route::get("/role/role_delete/{any}","AdminController@role_delete");
Route::get("/permission/create","AdminController@permission");
Route::get("/permission/permission_delete/{any}","AdminController@permission_delete");
Route::post("/role/store","AdminController@store");
Route::post("/permission/store","AdminController@permission_store");
Route::get("/admin/dashboard","AdminController@dashboard");
Route::get("/admin/pending_registration","AdminController@pending_registration");

//testing route

//reoute for registeration via front end

Auth::routes();
//Route::resource("/register","RegisterController");

Route::get('/home', 'HomeController@index');
