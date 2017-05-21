<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class LinkDronController extends Controller
{
    public function obtenerDronDeLink($motor,$marco,$control,$bateria,$camara,$gps)
    {

        echo $motor;
        echo $gps;

        setcookie('idMotor', $motor, time() + 1800);
        setcookie('idMarco', $marco, time() + 1800);
        setcookie('idControl', $control, time() + 1800);
        setcookie('idBateria', $bateria, time() + 1800);
        setcookie('idCamara', $camara, time() + 1800);
        setcookie('idGps', $gps, time() + 1800);

        return Back();

    }

    public function obtenerUrl(){

        $idMotor = $_COOKIE["idMotor"];
        $idMarco = $_COOKIE["idMarco"];
        $idControl = $_COOKIE["idControl"];
        $idBateria = $_COOKIE["idBateria"];
        $idCamara = $_COOKIE["idCamara"];
        $idGps = $_COOKIE["idGps"];

        return '/dron/'.$idMotor.'/'.$idMarco.'/'.$idControl.'/'.$idBateria.'/'.$idCamara.'/'.$idGps.'/';

    }
}
