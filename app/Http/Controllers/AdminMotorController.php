<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminMotorController extends Controller
{
    function mostrarTodosMotores() {
        $motores = Motor::all();
        return view('drones.motores',['motores'=>$motores]);
    }
    
    function agregarMotor(Request $request) {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'revoluciones'=> 'required|max:11',
            'voltaje'=> 'required|max:11',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/motores')
                ->withInput()
                ->withErrors($validator);
        }

        $motores = new Motor;
        $motores->modelo = $request->modelo;
        $motores->revoluciones = $request->revoluciones;
        $motores->voltaje = $request->voltaje;
        $motores->imagen = $request->imagen;
        $motores->save();

        return redirect('/motores');
    }
    
    function editarMotor(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'revoluciones'=> 'required|max:11',
            'voltaje'=> 'required|max:11',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/motores')
                ->withInput()
                ->withErrors($validator);
        }

        $motores = Motor::findOrFail($id);
        $motores->modelo = $request->modelo;
        $motores->revoluciones = $request->revoluciones;
        $motores->voltaje = $request->voltaje;
        $motores->imagen = $request->imagen;
        $motores->save();

        return redirect('/motores');
    }
    
    function listaEdicion($id) {
        $motores = Motor::findOrFail($id);
        return view('drones.motor-editar',['motores'=>$motores]);
    }
    
    function eliminarMotor($id) {
        Motor::findOrFail($id)->delete();
        return redirect('/motores');
    }
}
