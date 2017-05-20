function cargarComponentes(idMotor, idMarco, idControl, idBateria, idCamara, idGps){
    cargarMotor(idMotor);
    cargarMarco(idMarco);
    cargarCamara(idCamara);
    cargarGps(idGps);
    cargarBateria(idBateria);
    cargarControl(idControl);
    $('[data-toggle="tooltip"]').tooltip();
}




function cargarMotor(idMotor) {
    $.ajax({
        url: "/elementosMotores",
        context: document.body,
        success: function (data) {

            pedido = data;
            var motor = pedido.motores[idMotor-1];
            atributos="Modelo:"+motor.modelo+
                " - Revoluciones: "+motor.revoluciones+
                " - Voltaje "+motor.voltaje;
            $.cookie("idMotor",idMotor);
            cargar(motor,"#imgMotor",atributos);
        }
    });
}


function cargarMarco(idMarco) {
    $.ajax({
        url: "/elementosMarcos",
        context: document.body,
        success: function (data) {
            pedido = data;
            var marco=pedido.marcos[idMarco-1];
            atributos="Modelo: "+marco.modelo+
                " - Marca: "+marco.marca+
                " - Color: "+marco.color+
                " - Material: "+marco.material+
                " - Número de helices: "+marco.numeroHelices;
            $.cookie("idMarco",idMarco);
            cargar(marco,"#imgMarco",atributos);
        }
    });
}

function cargarBateria(idBateria) {
    $.ajax({
        url: "/elementosBaterias",
        context: document.body,
        success: function (data) {
            pedido = data;
            var bateria = pedido.baterias[idBateria-1];
            atributos="Modelo: "+bateria.modelo+
                " - Voltaje: "+bateria.voltaje+
                " - Duración: "+bateria.duracion+
                " - Tipo: "+bateria.tipo;
            $.cookie("idBateria",idBateria);
            cargar(bateria,"#imgBateria",atributos);
        }
    });
}

function cargarGps (idGps) {
    $.ajax({
        url: "/elementosGps",
        context: document.body,
        success: function (data) {
            pedido = data;
            var gps = pedido.gps[idGps-1];
            atributos="Nombre: "+gps.nombre+
                " - Modelo: "+gps.modelo;
            $.cookie("idGps",idGps);
            cargar(gps,"#imgGps",atributos);
        }
    });
}

function cargarControl (idControl) {
    $.ajax({
        url: "/elementosControles",
        context: document.body,
        success: function (data) {
            pedido = data;
            var mando = pedido.controles[idControl-1];
            atributos="Modelo: "+mando.modelo+
                " - Plataforma: "+mando.plataforma+
                " - Frecuencia: "+mando.frecuencia;
            $.cookie("idControl",idControl);
            cargar(mando,"#imgControl",atributos);

        }
    });
}

function cargarCamara(idCamara) {
    $.ajax({
        url: "/elementosCamaras",
        context: document.body,
        success: function (data) {
            pedido = data;
            var camara = pedido.camaras[idCamara-1];
            atributos="Modelo: "+camara.modelo+
                " - Marca: "+camara.marca+
                " - Megapixeles: "+camara.megapixeles;
            $.cookie("idCamara",idCamara);
            cargar(camara,"#imgCamara",atributos);
        }
    });
}



function cargar(modelo,i,atributos){
    $(i).attr('src',modelo.imagen);
    $(i).tooltip('hide');
    $(i).attr('data-original-title',atributos);

}
