<?php

namespace App\Http\Controllers;

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
}
