<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistradoController extends Controller
{
    function index() {
        return view('drones.usuarios');
    }
    
    function guardarModelo() {
        return view('drones.registrarDrone');
    }
    
}
