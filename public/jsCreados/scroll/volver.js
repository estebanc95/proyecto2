$('#tablaComp').on('click','.imgClick', function(){
    $('html, body').animate({
        scrollTop: $("#menuDeArmado").offset().top
    }, 500);
});
