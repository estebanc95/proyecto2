$( "#imgCamara" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Cámaras");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

        var i=0;
        var len=0;
        var camaras=json.camaras;
        for (i=0, len=camaras.length; i<len ; i++){
            atributos="Modelo: "+camaras[i].modelo+
                    " - Marca: "+camaras[i].marca+
                    " - Megapixeles: "+camaras[i].megapixeles;
            cargarElementos(4,camaras[i],i,atributos);
        }
    });
});
