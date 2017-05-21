<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gps;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminGpsController extends Controller
{
    function mostrarTodosGpss() {
        $gps = Gps::all();
        return view('drones.gps',['gps'=>$gps]);
    }

    function agregarGps(Request $request) {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:190',
            'modelo'=> 'required|max:190',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/gpss')
                ->withInput()
                ->withErrors($validator);
        }

        $gps = new Gps;
        $gps->nombre = $request->nombre;
        $gps->modelo = $request->modelo;
        $gps->imagen = $request->imagen;
        $gps->save();

        return redirect('/gpss');
    }

    function editarGps (Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:190',
            'modelo'=> 'required|max:190',
            'imagen'=> 'required|max:190',
        ]);

        if ($validator->fails()) {
            return redirect('/gpss')
                ->withInput()
                ->withErrors($validator);
        }

        $gps = Gps::findOrFail($id);
        $gps->nombre = $request->nombre;
        $gps->modelo = $request->modelo;
        $gps->imagen = $request->imagen;
        $gps->save();

        return redirect('/gpss');
    }

    function listaEdicionGps($id) {
        $gps = Gps::findOrFail($id);
        return view('drones.gps-editar',['gps'=>$gps]);
    }

    function eliminarGps($id) {
        Gps::findOrFail($id)->delete();
        return redirect('/gpss');
    }
}
