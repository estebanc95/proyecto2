<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos_Almacenados;

class UserRegistradoController extends Controller
{
    function index() {
        return view('drones.usuarios');
    }
    
    function guardarModelo() {
        return view('drones.registrarDrone');
    }
    
    function mostrarTodosModelos() {
        $modelos = Modelos_Almacenados::all();
        return view('drones.misModelos',['modelos'=>$modelos]);
    }
    
}
