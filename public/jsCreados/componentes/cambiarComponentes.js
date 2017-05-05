function cambiarComponentes(idComponente,mod) {
    var ubicacionDeImagen;

    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {
        var i=0;
        var len=0;
        var componente;
        switch (idComponente) {
            case 0:
                ubicacionDeImagen = "#imgMotor";
                componente = json.motores;
                break;
            case 1:
                ubicacionDeImagen = "#imgMarco";
                componente = json.marcos;
                break;
            case 2:
                ubicacionDeImagen = "#imgControl";
                componente = json.controles;
                break;
            case 3:
                ubicacionDeImagen = "#imgBateria";
                componente = json.baterias;
                break;
            case 4:
                ubicacionDeImagen = "#imgCamara";
                componente = json.camaras;
                break;
            case 5:
                ubicacionDeImagen = "#imgGps";
                componente = json.gps;
                break;
        }

        var elementoComponenteID = componente[mod-1];

        $(ubicacionDeImagen).attr('src',elementoComponenteID.imagen);
    });
}
