<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getLogin()
    {
        return view ('users.signin');
    }

    public function getRegister()
    {
        return view ('users.signup');
    }

    public function index()
    {
        $user = User::all();
        return view('index', ['users'=>$user]);
    }

    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $user->roles()->attach(Role::where('name', 'Student')->first());
        return redirect()->route('index');
    }

    public function postLogin(Request $request)
    {
        $this->validate ($request,[
            'email'=>'email|required',
            'password'=>'required|min:4'
        ]);

        if(Auth::Attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')]))
        {
            return redirect()->route('index');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function postAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if($request['role_student'])
        {
            $user->roles()->attach(Role::where('name','Student')->first());
        }
        if($request['role_CO'])
        {
            $user->roles()->attach(Role::where('name','CO')->first());
        }
        if($request['role_SA'])
        {
            $user->roles()->attach(Role::where('name','SA')->first());
        }
        return redirect()->back();
    }

    public function getAboutPage()
    {
        return response('About Us Page', 200);
    }

    public function getLogout(){
        Auth::logout();
        return view('users.signin');
    }
}
