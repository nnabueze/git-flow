<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Register;
use App\Client;
use Redirect;
use App\User;
use App\Role;
use App\Permission;
use Auth;
use Hash;

use Session;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //methode showing the dashboard
    public function dashboard()
    {
        //pending registration
        $clients = Register::where("status","0")->get();

        //complete registration
        $complete = Register::where("status","1")->get();

        $pending_count = $clients->count();
        $complete_count = $complete->count();

        //last five
        $register = Register::limit(5)->get();
    	return view("admin.dashboard.index",compact("register","pending_count","complete_count"));
    }

    //getting list of pending registration
    public function pending_registration()
    {
    	$clients = Register::where("status","0")->get();
    	return view("admin.registration.pending",compact("clients"));
    }

    //displaying login page
    public function admin()
    {
        return Redirect::to("/login");
    }

    //display the role page
    public function role()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view("role.create",compact("permissions","roles"));
    }

    //displaying admin page to create user
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view("user.create",compact("users","roles"));
    }

    //storing role
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        if ($role = Role::create($request->all())) {
            $role->attachPermissions($request->input("permission"));
            Session::flash('message','Successful! Role Created');

            return Redirect::back();
        }

        Session::flash('warning','Failed! Role Not Created');
        return Redirect::back();

    }

    //displaying permission
    public function permission()
    {
        $permissions = Permission::all();
        return view("permission.create",compact("permissions"));
    }

    //storing permission
    public function permission_store(Request $request)
    {
        $this->validator($request->all())->validate();
        if ($permission = Permission::create($request->all())) {
            Session::flash('message','Successful! Permission Created');

            return Redirect::back();
        }

        Session::flash('warning','Failed! Permission Not Created');
        return Redirect::back();
    }

    //deleting permission
    public function permission_delete($id)
    {
        
        if ($permission = Permission::find($id)) {
           $permission->delete();

           Session::flash('message','Successful! Permission Deleted');
           return Redirect::back();
        }

        Session::flash('warning','Failed! Permission Not Deleted');
        return Redirect::back();
    }

    //deleting role
    public function role_delete($id)
    {
       
       if ($role = Role::find($id)) {
        if ($role->name == "Admin" || $role->name == "Superadmin") {
            Session::flash('warning','Failed! can delete a superadmin/admin');
            return Redirect::back();
        }
          $role->delete();

          Session::flash('message','Successful! role Deleted');
          return Redirect::back();
       }

       Session::flash('warning','Failed! role Not Deleted');
       return Redirect::back();
    }

    //deleting a specific user
    public function user_delete($id)
    {

        if ($user = User::find($id)) {
            if ($user->hasRole('Admin') || $user->hasRole("Superadmin")) {

               Session::flash('warning',"Failed! Can't delete an Admin/Superadmin");
               return Redirect::back();
               
            }else{

                $user->delete();

                Session::flash('message','Successful! user Deleted');
                return Redirect::back();

            }
         
        }

        Session::flash('warning','Failed! user Not Deleted');
        return Redirect::back();
    }

    //printing id card
    public function print_id()
    {
            //complete registration
            $complete = Register::where("status","1")->get();
            return view("admin.print_id",compact("complete"));
    }

    //Displaying admin user edit form
    public function edit()
    {
        $user = User::find(Auth::user()->id);
        return view("user.edit",compact("user"));
    }

    //store admin user update
    public function update_user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $request['password'] = Hash::make($request->input("password"));
        $user->update($request->all());

        Session::flash("message","Successful! Record updated");
        return Redirect::back();

    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'display_name' => 'required',
        ]);
    }
}
