function cambiarComponentes(idComponente,mod) {
    var ubicacionDeImagen;
    var i=0;
    var len=0;
    var componente;
    switch (idComponente) {
        case 0:
            ubicacionDeImagen = "#imgMotor";
            cargarMotor(mod,ubicacionDeImagen);
            break;
        case 1:
            ubicacionDeImagen = "#imgMarco";
            cargarMarco(mod,ubicacionDeImagen);
            break;
        case 2:
            ubicacionDeImagen = "#imgControl";
            cargarControl(mod,ubicacionDeImagen);
            break;
        case 3:
            ubicacionDeImagen = "#imgBateria";
            cargarBateria(mod,ubicacionDeImagen);
            break;
        case 4:
            ubicacionDeImagen = "#imgCamara";
            cargarCamara(mod,ubicacionDeImagen);
            break;
        case 5:
            ubicacionDeImagen = "#imgGps";
            cargarGps(mod,ubicacionDeImagen);
            break;
                        }


}



function cargarMotor(idMotor,mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosMotores",
        context: document.body,
        success: function (data) {

            pedido = data;
            var motor = pedido.motores;
            var elementoComponenteID = motor[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}


function cargarMarco(mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosMarcos",
        context: document.body,
        success: function (data) {
            pedido = data;
            var marco=pedido.marcos;
            var elementoComponenteID = marco[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}

function cargarBateria(mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosBaterias",
        context: document.body,
        success: function (data) {
            pedido = data;
            var bateria = pedido.baterias;
            var elementoComponenteID = bateria[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}

function cargarGps (mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosGps",
        context: document.body,
        success: function (data) {
            pedido = data;
            var gps = pedido.gps;
            var elementoComponenteID = gps[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}

function cargarControl (mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosControles",
        context: document.body,
        success: function (data) {
            pedido = data;
            var mando = pedido.controles;
            var elementoComponenteID = mando[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}

function cargarCamara(mod,ubicacionDeImagen) {
    $.ajax({
        url: "/elementosCamaras",
        context: document.body,
        success: function (data) {
            pedido = data;
            var camara = pedido.camaras;
            var elementoComponenteID = camara[mod-1];
            $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
        }
    });
}
