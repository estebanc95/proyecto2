function cargarElementos(num,modelo,i,atributos){
    if(i%3 == 0) {
        var rowsElem = "<div class='row'>";
        $("#tablaComp").append(rowsElem);
    }
    var htmlSave = "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>"+
        "<div id='parteDeComp' class='parteDisp'>"+ "<br>" + "<img onClick='cambiarComponentes("+num+","+modelo.id+")'  src='" + modelo.imagen +
        "' data-toggle='tooltip' title='"+atributos+ "' class='img-responsive center-block imgClick' alt='Imagen componentes'/>" + "</div></div>";

    $("#tablaComp").append(htmlSave);
    $('[data-toggle="tooltip"]').tooltip();
    
    if(i%3 == 0) {
        var rowsElem2 = "</div>";
        $("#tablaComp").append(rowsElem2);
    }

}
