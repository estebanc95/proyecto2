<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bateria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminBateriaController extends Controller
{
    function mostrarTodosBaterias() {
        $baterias = Bateria::all();
        return view('drones.baterias',['baterias'=>$baterias]);
    }

    function agregarBateria(Request $request) {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'voltaje'=> 'required|max:6',
            'duracion'=> 'required|max:6',
            'tipo'=> 'required|max:190',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/baterias')
                ->withInput()
                ->withErrors($validator);
        }

        $baterias = new Bateria;
        $baterias->modelo = $request->modelo;
        $baterias->voltaje = $request->voltaje;
        $baterias->duracion = $request->duracion;
        $baterias->tipo = $request->tipo;
        $baterias->imagen = $request->imagen;
        $baterias->save();

        return redirect('/baterias');
    }

    function editarBateria (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'voltaje'=> 'required|max:6',
            'duracion'=> 'required|max:6',
            'tipo'=> 'required|max:190',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/baterias')
                ->withInput()
                ->withErrors($validator);
        }

        $baterias = Bateria::findOrFail($id);
        $baterias->modelo = $request->modelo;
        $baterias->voltaje = $request->voltaje;
        $baterias->duracion = $request->duracion;
        $baterias->tipo = $request->tipo;
        $baterias->imagen = $request->imagen;
        $baterias->save();

        return redirect('/baterias');
    }

    function listaEdicionBateria($id) {
        $baterias = Bateria::findOrFail($id);
        return view('drones.bateria-editar',['baterias'=>$baterias]);
    }

    function eliminarBateria($id) {
        Bateria::findOrFail($id)->delete();
        return redirect('/baterias');
    }
}
