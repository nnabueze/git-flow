<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Redirect;
use App\User;

class AdminController extends Controller
{
    //

    //methode showing the dashboard
    public function dashboard()
    {
    	return view("admin.dashboard.index");
    }

    //getting list of pending registration
    public function pending_registration()
    {
    	$register = Register::where("status","0")->get();
    	return view("admin.registration.pending",compact("register"));
    }

    //displaying login page
    public function admin()
    {
        return Redirect::to("/login");
    }

    //displaying admin page to create user
    public function create()
    {
        $users = User::all();
        return view("user.create",compact("users"));
    }
}
