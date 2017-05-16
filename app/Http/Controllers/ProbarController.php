<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Motor;

class ProbarController extends Controller
{

	public function index($value='')
	{
		return view('drones.prueba');
	}
  	public function json() 
  	{
  		$usuarios = Motor::all();
  		return compact('motores');
  	}
}
