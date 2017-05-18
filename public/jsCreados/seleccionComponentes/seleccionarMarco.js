$( "#imgMarco" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Marcos");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var jsonMarco;

    $.ajax({
        url: "/elementosMarcos",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonMarco = pedido.marcos;
            var i=0;
            var len=0;
            var marcos=jsonMarco;
            for (i=0, len=jsonMarco.length; i<len ; i++){
                atributos="Modelo: "+marcos[i].modelo+
                    " - Marca: "+marcos[i].marca+
                    " - Color: "+marcos[i].color+
                    " - Material: "+marcos[i].material+
                    " - Número de helices: "+marcos[i].numeroHelices;
                cargarElementos(1,marcos[i],i,atributos);
            }
        }
    });
});
