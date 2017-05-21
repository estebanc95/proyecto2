<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precargado;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminPrecargadosController extends Controller
{
    function mostrarTodosPrecargados() {
        $precargados = Precargado::all();
        return view('drones.precargados',['precargados'=>$precargados]);
    }

    function agregarPrecargado(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_motor' => 'required|max:2',
            'id_marco'=> 'required|max:2',
            'id_control'=> 'required|max:2',
            'id_bateria'=> 'required|max:2',
            'id_camara'=> 'required|max:2',
            'id_gps'=> 'required|max:2',
        ]);

        if ($validator->fails()) {
            return redirect('/precargados')
                ->withInput()
                ->withErrors($validator);
        }

        $precargados = new Precargado;
        $precargados->id_motor = $request->id_motor;
        $precargados->id_marco = $request->id_marco;
        $precargados->id_control = $request->id_control;
        $precargados->id_bateria = $request->id_bateria;
        $precargados->id_camara = $request->id_camara;
        $precargados->id_gps = $request->id_gps;
        $precargados->save();

        return redirect('/precargados');
    }

    function editarPrecargado (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'id_motor' => 'required|max:2',
            'id_marco'=> 'required|max:2',
            'id_control'=> 'required|max:2',
            'id_bateria'=> 'required|max:2',
            'id_camara'=> 'required|max:2',
            'id_gps'=> 'required|max:2',
        ]);

        if ($validator->fails()) {
            return redirect('/precargados')
                ->withInput()
                ->withErrors($validator);
        }

        $precargados = Precargado::findOrFail($id);
        $precargados->id_motor = $request->id_motor;
        $precargados->id_marco = $request->id_marco;
        $precargados->id_control = $request->id_control;
        $precargados->id_bateria = $request->id_bateria;
        $precargados->id_camara = $request->id_camara;
        $precargados->id_gps = $request->id_gps;
        $precargados->save();

        return redirect('/precargados');
    }

    function listaEdicionPrecargado($id) {
        $precargados = Precargado::findOrFail($id);
        return view('drones.precargado-editar',['precargados'=>$precargados]);
    }

    function eliminarPrecargado($id) {
        Precargado::findOrFail($id)->delete();
        return redirect('/precargados');
    }
}
