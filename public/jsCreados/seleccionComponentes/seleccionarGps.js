$( "#imgGps" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("GPS");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

        var i=0;
        var len=0;
        var gps=json.gps;
        for (i=0, len=gps.length; i<len ; i++){
            atributos="Nombre: "+gps[i].nombre+
                    " - Modelo: "+gps[i].modelo;
            cargarElementos(5,gps[i],i,atributos);
        }
    });
});
