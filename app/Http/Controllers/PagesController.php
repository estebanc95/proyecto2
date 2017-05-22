<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precargado;

class PagesController extends Controller
{
   	public function index()
   	{
        $precargados = Precargado::all();
        return view ('drones.index')->with('precargados', $precargados);

   	}

   	public function quienesSomos()
   	{
   		return view('drones.quienes-somos');
   	}
    
    public function admin()
    {
        return view ('drones.admin');
    }
}
