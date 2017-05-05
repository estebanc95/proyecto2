function cargarComponentes(idMotor, idMarco, idControl, idBateria, idCamara, idGps){

    var myjson =$.getJSON("/public/json/datosDron.json", function(json) {

      var motor= json.motores[idMotor-1];
      atributos="Modelo:"+motor.modelo+
              " - Revoluciones: "+motor.revoluciones+
              " - Voltaje "+motor.voltaje;
      cargar(motor,"#imgMotor",atributos);

      var marco=json.marcos[idMarco-1];
      atributos="Modelo: "+marco.modelo+
              " - Marca: "+marco.marca+
              " - Color: "+marco.color+
              " - Material: "+marco.material+
              " - Número de helices: "+marco.numeroHelices;
      cargar(marco,"#imgMarco",atributos);

      var bateria = json.baterias[idBateria-1];
      atributos="Modelo: "+bateria.modelo+
              " - Voltaje: "+bateria.voltaje+
              " - Duración: "+bateria.duracion+
              " - Tipo: "+bateria.tipo;
      cargar(bateria,"#imgBateria",atributos);

      var camara = json.camaras[idCamara-1];
      atributos="Modelo: "+camara.modelo+
              " - Marca: "+camara.marca+
              " - Megapixeles: "+camara.megapixeles;
      cargar(camara,"#imgCamara",atributos);

      var gps = json.gps[idGps-1];
      atributos="Nombre: "+gps.nombre+
              " - Modelo: "+gps.modelo;
      cargar(gps,"#imgGps",atributos);

      var mando = json.controles[idControl-1];
      atributos="Modelo: "+mando.modelo+
              " - Plataforma: "+mando.plataforma+
              " - Frecuencia: "+mando.frecuencia;
      cargar(mando,"#imgControl",atributos);

      $('[data-toggle="tooltip"]').tooltip();


  });


}

function cargar(modelo,i,atributos){
    $(i).attr('src',modelo.imagen);
    $(i).tooltip('hide');
    $(i).attr('data-original-title',atributos);

}
