$( "#imgControl" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Controles");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);

    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

        var i=0;
        var len=0;
        var controles=json.controles;
        for (i=0, len=controles.length; i<len ; i++){
            atributos="Modelo: "+controles[i].modelo+
                    " - Plataforma: "+controles[i].plataforma+
                    " - Frecuencia: "+controles[i].frecuencia;
            cargarElementos(2,controles[i],i,atributos);
        }
    });
});
