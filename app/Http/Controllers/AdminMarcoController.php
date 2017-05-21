<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marco;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminMarcoController extends Controller
{
    function mostrarTodosMarcos() {
        $marcos = Marco::all();
        return view('drones.marcos',['marcos'=>$marcos]);
    }

    function agregarMarco(Request $request) {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'marca'=> 'required|max:190',
            'color'=> 'required|max:190',
            'material'=> 'required|max:190',
            'numeroHelices'=> 'required|max:11',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/marcos')
                ->withInput()
                ->withErrors($validator);
        }

        $marcos = new Marco;
        $marcos->modelo = $request->modelo;
        $marcos->marca = $request->marca;
        $marcos->color = $request->color;
        $marcos->material = $request->material;
        $marcos->numeroHelices = $request->numeroHelices;
        $marcos->imagen = $request->imagen;
        $marcos->save();

        return redirect('/marcos');
    }

    function editarMarco (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'marca'=> 'required|max:190',
            'color'=> 'required|max:190',
            'material'=> 'required|max:190',
            'numeroHelices'=> 'required|max:3',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/marcos')
                ->withInput()
                ->withErrors($validator);
        }

        $marcos = Marco::findOrFail($id);
        $marcos->modelo = $request->modelo;
        $marcos->marca = $request->marca;
        $marcos->color = $request->color;
        $marcos->material = $request->material;
        $marcos->numeroHelices = $request->numeroHelices;
        $marcos->imagen = $request->imagen;
        $marcos->save();

        return redirect('/marcos');
    }

    function listaEdicionMarco($id) {
        $marcos = Marco::findOrFail($id);
        return view('drones.marco-editar',['marcos'=>$marcos]);
    }

    function eliminarMarco($id) {
        Marco::findOrFail($id)->delete();
        return redirect('/marcos');
    }
}
