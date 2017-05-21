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

        $nombreMotor = Motor::find($idMotor)->modelo;
        $nombreMarco = Motor::find($idMarco)->modelo;
        $nombreControl = Motor::find($idControl)->modelo;
        $nombreBateria = Motor::find($idBateria)->modelo;
        $nombreCamara = Motor::find($idCamara)->modelo;
        $nombreGps = Motor::find($idGps)->modelo;

        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('drones.comprobante',['motor'=>$nombreMotor,'marco'=>$nombreMarco,'control'=>$nombreControl,
        'bateria'=>$nombreBateria,'camara'=>$nombreCamara,'gps'=>$nombreGps]);
        return $pdf->stream();
    }
}
