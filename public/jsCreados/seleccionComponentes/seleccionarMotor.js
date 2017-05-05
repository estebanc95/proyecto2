$( "#imgMotor" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Motores");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);

    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {
        var i=0;
        var len=0;
        var motores=json.motores;
        for (i=0, len=motores.length; i<len ; i++){
            atributos="Modelo:"+motores[i].modelo+
                    " - Revoluciones: "+motores[i].revoluciones+
                    " - Voltaje "+motores[i].voltaje;
            cargarElementos(0,motores[i],i,atributos);
        }
    });
});
