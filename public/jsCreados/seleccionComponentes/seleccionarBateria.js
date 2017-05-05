$( "#imgBateria" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Baterías");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);

    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

        var i=0;
        var len=0;
        var baterias=json.baterias;
        for (i=0, len=baterias.length; i<len ; i++){
            atributos="Modelo: "+baterias[i].modelo+
                    " - Voltaje: "+baterias[i].voltaje+
                    " - Duración: "+baterias[i].duracion+
                    " - Tipo: "+baterias[i].tipo;
            cargarElementos(3,baterias[i],i,atributos);
        }
    });
});
