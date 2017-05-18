
$( "#imgGps" ).click(function() {
    $("#claseDeComp,#tablaComp").empty();
    $("#claseDeComp").prepend("GPS");
    $("#claseDeComp").append("<hr>");

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#textoComponentes").offset().top
    }, 500);


    var jsonGps;
    $.ajax({
        url: "/elementosGps",
        context: document.body,
        success: function (data) {
            pedido = data;
            jsonGps = pedido.gps;

            var i=0;
            var len=0;
            var gps=jsonGps;
            for (i=0, len=jsonGps.length; i<len ; i++){
                atributos="Nombre: "+gps[i].nombre+
                    " - Modelo: "+gps[i].modelo;
                cargarElementos(5,gps[i],i,atributos);
            }
        }
    });
});
