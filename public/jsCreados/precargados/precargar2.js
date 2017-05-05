$( "#precargado2" ).click(function() {

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#menuDeArmado").offset().top
    }, 500);

    cargarComponentes(1,3,3,2,1,2);

});
