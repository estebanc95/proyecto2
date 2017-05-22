$(document).ready(function() {

    var i=0;
    var cantComp = 2;
    for (i=0; i<cantComp ; i++){

        if(i%3 == 0) {
            var rowsElem = "<div class='row'>";
            $("#listarOpcionesUser").append(rowsElem);
        }

        var htmlSave = "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";

        switch (i) {
            case 0:
                htmlSave=htmlSave+  "<div id='componenteGrabar' class='componentesDrone text-center'>"+ "<br>" +"Grabar drone"+ "<br>" +"<a href='/guardarModelo'>"+"<img src='imagenes/iconosUser/save.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 1:
                htmlSave=htmlSave+  "<div id='componenteRecuperar' class='componentesDrone text-center'>"+ "<br>" +"Recuperar drone"+ "<br>"+ "<a href='/modelos'>"+"<img src='imagenes/iconosUser/restore.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
        }



        $("#listarOpcionesUser").append(htmlSave);

        if(i%3 == 0) {
            var rowsElem2 = "</div>";
            $("#listarOpcionesUser").append(rowsElem2);
        }


    }


});