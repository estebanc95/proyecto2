<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        if(\Auth::user()->is_admin())
        {
            return Redirect('/admin');
        }
        else
        {
            return Redirect('/userReg');
        }
    }
}
