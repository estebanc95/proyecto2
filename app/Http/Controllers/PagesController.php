<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   	public function index()
   	{
   		return view ('drones.index');
   	}

   	public function quienesSomos()
   	{
   		return view('drones.quienes-somos');
   	}
}
