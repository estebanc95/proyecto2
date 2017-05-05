$( "#precargado1" ).click(function() {

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#menuDeArmado").offset().top
    }, 500);

    cargarComponentes(2,4,1,1,2,2);

});
