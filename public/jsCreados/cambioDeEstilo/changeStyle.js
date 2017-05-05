$("#estilo2").click(function() {
    var texto = $.cookie("cssCambio");
    $.cookie('cssCambio','/public/css/estilo.css');
    cambiarEstilo2a1();

}
                   );


$("#estilo1").click(function() {
    var texto = $.cookie("cssCambio");
    $.cookie('cssCambio','/public/css/style.css');
    cambiarEstilo1a2();
   
}
                   );

function cambiarEstilo2a1 () {
    $('link[id="cascadaStyles"]').attr('href','/public/css/estilo.css');
    $("#headerEstilo1").hide();
    $("#headerEstilo2").show();
    $("#infoTexto").hide();
    
}


function cambiarEstilo1a2 () {
    $('link[id="cascadaStyles"]').attr('href','/public/css/style.css');
    $("#headerEstilo1").show();
    $("#headerEstilo2").hide();
    $("#infoTexto").show();
    
}