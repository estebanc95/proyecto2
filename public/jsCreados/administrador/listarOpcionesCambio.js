$(document).ready(function() {

    var i=0;
    var cantComp = 6;
    for (i=0; i<cantComp ; i++){

        if(i%3 == 0) {
            var rowsElem = "<div class='row'>";
            $("#listarOpciones").append(rowsElem);
        }

        var htmlSave = "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>";

        switch (i) {
            case 0:
                htmlSave=htmlSave+  "<div id='componenteMotor' class='componentesDrone text-center'>"+ "<br>" +"Motor"+ "<br>" +"<a href='/motores'>"+"<img src='imagenes/iconosAdmin/motor.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 1:
                htmlSave=htmlSave+  "<div id='componenteMarco' class='componentesDrone text-center'>"+ "<br>" +"Marco"+ "<br>"+ "<a href='/marcos'>"+"<img src='imagenes/iconosAdmin/marco.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 2:
                htmlSave=htmlSave+  "<div id='componenteControl' class='componentesDrone text-center '>"+ "<br>" +"Control"+ "<br>"+ "<a href='/controles'>"+"<img src='imagenes/iconosAdmin/control.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 3:
                htmlSave=htmlSave+  "<div id='componenteBateria' class='componentesDrone text-center'>"+ "<br>" +"Bateria"+ "<br>"+"<a href='/baterias'>"+ "<img src='imagenes/iconosAdmin/bateria.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 4:
                htmlSave=htmlSave+  "<div id='componenteCamara' class='componentesDrone text-center'>"+ "<br>" +"Camara"+ "<br>"+ "<a href='/camaras'>"+"<img src='imagenes/iconosAdmin/camara.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
            case 5:
                htmlSave=htmlSave+  "<div id='componenteGPS' class='componentesDrone text-center'>"+ "<br>" +"GPS"+ "<br>"+ "<a href='/gpss'>"+ "<img src='imagenes/iconosAdmin/gps.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div>"
                break;
        }



        $("#listarOpciones").append(htmlSave);

        if(i%3 == 0) {
            var rowsElem2 = "</div>";
            $("#listarOpciones").append(rowsElem2);
        }


    }
    
    var htmlSave = "<div class='row'>" + "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>" + "<div id='componentePrecargados' class='componentesDrone text-center'>"+ "<br>" +"Precargados"+ "<br>" + "<a href='/precargados'>"+ "<img src='imagenes/iconosAdmin/precargados.png' class='img-responsive center-block imgClick' alt='Imagen componentes de un drone'/>" + "</div></div></div>"
    $("#listarOpciones").append(htmlSave);

});