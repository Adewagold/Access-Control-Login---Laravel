<?php

namespace App\Http\Controllers;

use App\User;
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

}
