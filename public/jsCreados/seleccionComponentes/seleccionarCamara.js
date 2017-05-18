$( "#imgCamara" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Cámaras");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var jsonCamara;

    $.ajax({
        url: "/elementosCamaras",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonCamara = pedido.camaras;
            var i=0;
            var len=0;
            var camaras=jsonCamara;
            for (i=0, len=jsonCamara.length; i<len ; i++){
                atributos="Modelo: "+camaras[i].modelo+
                    " - Marca: "+camaras[i].marca+
                    " - Megapixeles: "+camaras[i].megapixeles;
                cargarElementos(4,camaras[i],i,atributos);
            }
        }
    });
});
