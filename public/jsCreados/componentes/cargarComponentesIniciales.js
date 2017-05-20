$( document ).ready(function() {

    if (localStorage.idMotor) {
    var idMotor = localStorage.getItem("idMotor");
    var idMarco = localStorage.getItem("idMarco");
    var idControl = localStorage.getItem("idControl");
    var idBateria = localStorage.getItem("idBateria");
    var idCamara = localStorage.getItem("idCamara");
    var idGps = localStorage.getItem("idGps");

    cargarComponentes(idMotor,idMarco,idControl,idBateria,idCamara,idGps);

    }

    else {
    localStorage.setItem("idMotor", "1");
    localStorage.setItem("idMarco", "1");
    localStorage.setItem("idControl", "1");
    localStorage.setItem("idBateria", "1");
    localStorage.setItem("idCamara", "1");
    localStorage.setItem("idGps", "1");

    cargarComponentes(1,1,1,1,1,1);

    }

    
});
