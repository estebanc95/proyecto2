<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Motor;
use App\Marco;
use App\Bateria;
use App\Camara;
use App\Control;
use App\Gps;


class ComponentesController extends Controller
{
    public function jsonMotores() 
  	{
  		$motores = Motor::all();
  		return compact('motores');
  	}
    
      public function jsonMarcos() 
  	{
  		$marcos = Marco::all();
  		return compact('marcos');
  	}
    
       public function jsonBaterias() 
  	{
  		$baterias = Bateria::all();
  		return compact('baterias');
  	}
    
       public function jsonCamaras() 
  	{
  		$camaras = Camara::all();
  		return compact('camaras');
  	}
    
       public function jsonGps() 
  	{
  		$gps = Gps::all();
  		return compact('gps');
  	}
}
