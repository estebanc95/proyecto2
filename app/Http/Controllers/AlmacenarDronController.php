<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modelos_Almacenados;

class AlmacenarDronController extends Controller
{
    public function almacenar()
    {
        $idMotor = $_COOKIE["idMotor"];
        $idMarco = $_COOKIE["idMarco"];
        $idControl = $_COOKIE["idControl"];
        $idBateria = $_COOKIE["idBateria"];
        $idCamara = $_COOKIE["idCamara"];
        $idGps = $_COOKIE["idGps"];

        $idUsuario = 3;
        $nombre = "hola";

        DB::table('modelos_almacenados')->insert(
            ['id_usuario' => $idUsuario, 'nombre' => $nombre,'id_motor' => $idMotor,'id_marco' => $idMarco,
            'id_control' => $idControl,'id_bateria' => $idBateria,'id_camara' => $idCamara,'id_gps' => $idGps]
        );

        return redirect('/');
    }

    public function recuperar()
    {
        $idDron = 6;
        $miDron = Modelos_Almacenados::find($idDron);


        $_COOKIE["idMotor"] = $miDron->id_motor;
        $_COOKIE["idMarco"] = $miDron->id_marco;
        $_COOKIE["idControl"] = $miDron->id_control;
        $_COOKIE["idBateria"] = $miDron->id_bateria;
        $_COOKIE["idCamara"] = $miDron->id_camara;
        $_COOKIE["idGps"] = $miDron->id_gps;

        return redirect('/');
    }
}
