<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camara;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminCamaraController extends Controller
{
    function mostrarTodosCamaras() {
        $camaras = Camara::all();
        return view('drones.camaras',['camaras'=>$camaras]);
    }

    function agregarCamara(Request $request) {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'marca'=> 'required|max:190',
            'megapixeles'=> 'required|max:6',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/camaras')
                ->withInput()
                ->withErrors($validator);
        }

        $camaras = new Camara;
        $camaras->modelo = $request->modelo;
        $camaras->marca = $request->marca;
        $camaras->megapixeles = $request->megapixeles;
        $camaras->imagen = $request->imagen;
        $camaras->save();

        return redirect('/camaras');
    }

    function editarCamara (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'modelo' => 'required|max:190',
            'marca'=> 'required|max:190',
            'megapixeles'=> 'required|max:6',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/camaras')
                ->withInput()
                ->withErrors($validator);
        }

        $camaras = Camara::findOrFail($id);
        $camaras->modelo = $request->modelo;
        $camaras->marca = $request->marca;
        $camaras->megapixeles = $request->megapixeles;
        $camaras->imagen = $request->imagen;
        $camaras->save();

        return redirect('/camaras');
    }

    function listaEdicionCamara($id) {
        $camaras = Camara::findOrFail($id);
        return view('drones.camara-editar',['camaras'=>$camaras]);
    }

    function eliminarCamara($id) {
        Camara::findOrFail($id)->delete();
        return redirect('/camaras');
    }
}
