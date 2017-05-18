$( "#imgControl" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Controles");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);
    
    var jsonControl;
    $.ajax({
        url: "/elementosControles",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonControl = pedido.controles;

            var i=0;
            var len=0;
            var controles=jsonControl;
            for (i=0, len=jsonControl.length; i<len ; i++){
                atributos="Modelo: "+controles[i].modelo+
                    " - Plataforma: "+controles[i].plataforma+
                    " - Frecuencia: "+controles[i].frecuencia;
                cargarElementos(2,controles[i],i,atributos);
            }
        }
    });
});
