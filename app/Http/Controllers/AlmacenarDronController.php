<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modelos_Almacenados;

class AlmacenarDronController extends Controller
{
    public function almacenar($nombre)
    {
        $idMotor = $_COOKIE["idMotor"];
        $idMarco = $_COOKIE["idMarco"];
        $idControl = $_COOKIE["idControl"];
        $idBateria = $_COOKIE["idBateria"];
        $idCamara = $_COOKIE["idCamara"];
        $idGps = $_COOKIE["idGps"];

        $idUsuario = \Auth::user()->id;

        DB::table('modelos_almacenados')->insert(
            ['id_usuario' => $idUsuario, 'nombre' => $nombre,'id_motor' => $idMotor,'id_marco' => $idMarco,
            'id_control' => $idControl,'id_bateria' => $idBateria,'id_camara' => $idCamara,'id_gps' => $idGps]
        );

        return redirect('/');
    }

    public function recuperar()
    {
        $idDron = 7;
        $miDron = Modelos_Almacenados::find($idDron);

        setcookie('idMotor', $miDron->id_motor, time() + 1800);
        setcookie('idMarco', $miDron->id_marco, time() + 1800);
        setcookie('idControl', $miDron->id_control, time() + 1800);
        setcookie('idBateria', $miDron->id_bateria, time() + 1800);
        setcookie('idCamara', $miDron->id_camara, time() + 1800);
        setcookie('idGps', $miDron->id_gps, time() + 1800);

        return back();
    }
}
