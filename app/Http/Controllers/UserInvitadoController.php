<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInvitadoController extends Controller
{
    function index() {
        return view('drones.usuarios');
    }
}
