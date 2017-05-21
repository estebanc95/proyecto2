<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Control;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminControlController extends Controller
{
    function mostrarTodosControles() {
        $controles = Control::all();
        return view('drones.controles',['controles'=>$controles]);
    }

    function agregarControl(Request $request) {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'plataforma'=> 'required|max:190',
            'frecuencia'=> 'required|max:6',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/controles')
                ->withInput()
                ->withErrors($validator);
        }

        $controles = new Control;
        $controles->modelo = $request->modelo;
        $controles->plataforma = $request->plataforma;
        $controles->frecuencia = $request->frecuencia;
        $controles->imagen = $request->imagen;
        $controles->save();

        return redirect('/controles');
    }

    function editarControl (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'marca'=> 'required|max:190',
            'megapixeles'=> 'required|max:6',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/controles')
                ->withInput()
                ->withErrors($validator);
        }

        $controles = Control::findOrFail($id);
        $controles->modelo = $request->modelo;
        $controles->plataforma = $request->plataforma;
        $controles->frecuencia = $request->frecuencia;
        $controles->imagen = $request->imagen;
        $controles->save();

        return redirect('/controles');
    }

    function listaEdicionControl($id) {
        $controles = Control::findOrFail($id);
        return view('drones.Control-editar',['controles'=>$controles]);
    }

    function eliminarControl($id) {
        Control::findOrFail($id)->delete();
        return redirect('/controles');
    }
}

