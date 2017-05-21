<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use App\Motor;

class ComprobanteController extends Controller
{
    public function obtenerComprobante()
    {

        $idMotor = $_COOKIE["idMotor"];
        $idMarco = $_COOKIE["idMarco"];
        $idControl = $_COOKIE["idControl"];
        $idBateria = $_COOKIE["idBateria"];
        $idCamara = $_COOKIE["idCamara"];
        $idGps = $_COOKIE["idGps"];

        $miMotor = Motor::find($idMotor);

        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('drones.comprobante',['motor'=>$idMotor,'marco'=>$idMarco,'control'=>$idControl,'bateria'=>$idBateria,'camara'=>$idCamara,'gps'=>$idGps]);
        return $pdf->stream();
    }
}
