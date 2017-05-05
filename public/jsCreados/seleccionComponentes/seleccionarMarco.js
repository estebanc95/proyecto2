$( "#imgMarco" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Marcos");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

        var i=0;
        var len=0;
        var marcos=json.marcos;
        for (i=0, len=marcos.length; i<len ; i++){
            atributos="Modelo: "+marcos[i].modelo+
                    " - Marca: "+marcos[i].marca+
                    " - Color: "+marcos[i].color+
                    " - Material: "+marcos[i].material+
                    " - Número de helices: "+marcos[i].numeroHelices;
            cargarElementos(1,marcos[i],i,atributos);
        }
    });
});
