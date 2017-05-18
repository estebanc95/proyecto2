$( "#randomModelos" ).click(function() {

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#menuDeArmado").offset().top
    }, 500);

    var myjson =$.getJSON("/json/datosDron.json", function(json) {


        var randomMarco = Math.floor((Math.random() * json.marcos.length));
        var marco=json.marcos[randomMarco];
        var idMarco = marco.id;


        var randomMotores = Math.floor((Math.random() * json.motores.length));
        var motor= json.motores[randomMotores];
        var idMotor = motor.id;


        var randomBaterias = Math.floor((Math.random() * json.baterias.length));
        var bateria = json.baterias[randomBaterias];
        var idBateria = bateria.id;


        var randomCamaras = Math.floor((Math.random() * json.camaras.length));
        var camara = json.camaras[randomCamaras];
        var idCamara = camara.id;


        var randomGPS = Math.floor((Math.random() * json.gps.length));
        var gps = json.gps[randomGPS];
        var idGps = gps.id;


        var randomControles = Math.floor((Math.random() * json.controles.length));
        var control = json.controles[randomControles];
        var idControl = control.id;


        cargarComponentes(idMotor,idMarco,idControl,idBateria,idCamara,idGps);


    });
});
