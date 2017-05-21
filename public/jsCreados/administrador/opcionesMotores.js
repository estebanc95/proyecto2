function opcionesMotores () {
    $("#contenedorPrincipal").empty();
    $("#contenedorPrincipal").prepend("Motores");
    $("#contenedorPrincipal").append("<hr>");
    
    armarGrilla();
    
    var jsonMotores;

    $.ajax({
        url: "/elementosMotores",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonMotores = pedido.motores;
            var i=0;
            var len=0;
            var motores=jsonMotores;
            
            for (i=0, len=jsonMotores.length; i<len ; i++){
                
                armarComponentes (motores[i]);

            }
        }
    });
}

function armarGrilla () {
    
    var htmlPrincipal ="<div class='row'>";

    $("#contenedorPrincipal").append(htmlPrincipal);

    var htmlId = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoID' class='componentesTabla text-center'>"+ "<br>" +"ID" + "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlId);

    var htmlModelo = "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" + "<div id='elementoModelo' class='componentesTabla text-center'>"+ "<br>" +"Modelos"+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlModelo);

    var htmlRevoluciones = "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" + "<div id='elementoRevoluciones' class='componentesTabla text-center'>"+ "<br>" +"Revoluciones"+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlRevoluciones);

    var htmlImagen = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoImagen' class='componentesTabla text-center'>"+ "<br>" +"Imagen"+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlImagen);
    
    var htmlAcciones = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoAcciones' class='componentesTabla text-center'>"+ "<br>" +"Acciones"+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlAcciones);


    $("#contenedorPrincipal").append("</div>");
}

function armarComponentes (elementoMotor) {

    var htmlPrincipal ="<div class='row'>";

    $("#contenedorPrincipal").append(htmlPrincipal);

    var htmlId = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoID' class='componentesTabla text-center'>"+ "<br>" +elementoMotor.id + "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlId);

    var htmlModelo = "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" + "<div id='elementoModelo' class='componentesTabla text-center'>"+ "<br>" +elementoMotor.modelo + "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlModelo);

    var htmlRevoluciones = "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" + "<div id='elementoRevoluciones' class='componentesTabla text-center'>"+ "<br>" +elementoMotor.revoluciones + "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlRevoluciones);

    var htmlImagen = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoImagen' class='componentesTabla text-center'>"+ "<br>" +elementoMotor.imagen+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlImagen);

    var htmlAcciones = "<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>" + "<div id='elementoAcciones' class='componentesTabla text-center'>"+ "<br>" +"Acciones"+ "<br>" + "</div></div>";

    $("#contenedorPrincipal").append(htmlAcciones);


    $("#contenedorPrincipal").append("</div>");
}