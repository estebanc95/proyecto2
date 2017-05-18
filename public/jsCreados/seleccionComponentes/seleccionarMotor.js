$( "#imgMotor" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("Motores");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);

    var jsonMotor;

    $.ajax({
        url: "/elementosMotores",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonMotor = pedido.motores;
            var i=0;
            var len=0;
            var motores=jsonMotor;
            for (i=0, len=jsonMotor.length; i<len ; i++){
                atributos="Modelo:"+motores[i].modelo+
                    " - Revoluciones: "+motores[i].revoluciones+
                    " - Voltaje "+motores[i].voltaje;
                cargarElementos(0,motores[i],i,atributos);
            }
        }
    });
});
