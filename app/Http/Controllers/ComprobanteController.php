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
        echo $idMotor;

        $miMotor = Motor::find($idMotor);

        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('drones.comprobante',['motor'=>$idMotor,'marco'=>'3']);
        return $pdf->stream();
    }
}
