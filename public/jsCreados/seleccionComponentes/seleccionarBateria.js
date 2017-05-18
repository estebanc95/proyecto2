$( "#imgBateria" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Baterías");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);

    var jsonBateria;

    $.ajax({
        url: "/elementosBaterias",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonBateria = pedido.baterias;
            var i=0;
            var len=0;
            var baterias=jsonBateria;
            for (i=0, len=jsonBateria.length; i<len ; i++){
                atributos="Modelo: "+baterias[i].modelo+
                    " - Voltaje: "+baterias[i].voltaje+
                    " - Duración: "+baterias[i].duracion+
                    " - Tipo: "+baterias[i].tipo;
                cargarElementos(3,baterias[i],i,atributos);
            }
        }
    });
});
