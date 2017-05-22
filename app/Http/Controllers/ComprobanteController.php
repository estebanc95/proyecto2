<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use App\Motor;
use App\Marco;
use App\Control;
use App\Bateria;
use App\Camara;
use App\Gps;

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
        $nombreMarco = Marco::find($idMarco)->modelo;
        $nombreControl = Control::find($idControl)->modelo;
        $nombreBateria = Bateria::find($idBateria)->modelo;
        $nombreCamara = Camara::find($idCamara)->modelo;
        $nombreGps = Gps::find($idGps)->modelo;

        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('drones.comprobante',['motor'=>$nombreMotor,'marco'=>$nombreMarco,'control'=>$nombreControl,
        'bateria'=>$nombreBateria,'camara'=>$nombreCamara,'gps'=>$nombreGps]);
        return $pdf->stream();
    }
}
