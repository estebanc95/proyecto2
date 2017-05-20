$( document ).ready(function() {

    if ($.cookie("idMotor")) {
    var idMotor = $.cookie("idMotor");
    var idMarco = $.cookie("idMarco");
    var idControl = $.cookie("idControl");
    var idBateria = $.cookie("idBateria");;
    var idCamara = $.cookie("idCamara");
    var idGps = $.cookie("idGps");

    cargarComponentes(idMotor,idMarco,idControl,idBateria,idCamara,idGps);

    }

    else {
    $.cookie("idMotor", "1");
    $.cookie("idMarco", "1");
    $.cookie("idControl", "1");
    $.cookie("idBateria", "1");
    $.cookie("idCamara", "1");
    $.cookie("idGps", "1");

    cargarComponentes(1,1,1,1,1,1);

    }


});
