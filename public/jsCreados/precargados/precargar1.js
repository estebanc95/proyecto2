$( ".precargado" ).click(function() {

    //Scrollea hasta el cuadro correspondiente
    $('html, body').animate({
        scrollTop: $("#menuDeArmado").offset().top
    }, 500);
    
});
