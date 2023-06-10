

function agregardatos(hora_inicial, hora_final, descripcion, orden) {

    cadena = "hora_inicial=" + hora_inicial +
            "&hora_final=" + hora_final +
            "&descripcion=" + descripcion +
            "&orden=" + orden;

    $.ajax({
        type: "POST",
        url: "php/agregarDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaform(datos) {

    d = datos.split('||');

    $('#idhora_horario').val(d[0]);
    $('#ordenu').val(d[1]);
    $('#hora_unicialu').val(d[2]);
    $('#hora_finalu').val(d[3]);
    $('#descripcionu').val(d[4]);

}

function actualizaDatos() {


    idhora_horario = $('#idhora_horario').val();
    hora_unicialu = $('#hora_unicialu').val();
    hora_finalu = $('#hora_finalu').val();
    descripcionu = $('#descripcionu').val();
    ordenu = $('#ordenu').val();

    cadena = "&idhora_horario=" + idhora_horario +
            "&hora_unicialu=" + hora_unicialu +
            "&hora_finalu=" + hora_finalu +
            "&descripcionu=" + descripcionu +
            "&ordenu=" + ordenu;

    $.ajax({
        type: "POST",
        url: "php/actualizaDatos.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNo(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
            function () {
                eliminarDatos(id)
            }
    , function () {
        alertify.error('Se cancelo')
    });
}



function eliminarDatos(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}

/* ************************** HORARIOS  ******************************** */
function preguntarSiNoGH() {
    alertify.confirm('Generar Horarios', '¿Esta seguro de generar el horario?',
            function () {
                Generar_horarios()
            }
    , function () {
        alertify.error('Se cancelo')
    });
}

function Generar_horarios() {

    cadena = "id=";

    $.ajax({
        type: "POST",
        url: "php/generarhorario.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Generado con exito!");
            } else {
                alertify.error("Fallo al generar");
            }
        }
    });
}


function agregaformhorarios(datos) {

    
    d = datos.split('||');

    $('#id_horario').val(d[0]);
    $('#turnou').val(d[1]);
    $('#cursou').val(d[2]);
    $('#docenteu').val(d[3]);
    $('#gradou').val(d[4]);
    $('#diau').val(d[6]);



}

function actualizadatos_horario() {

    id_horario = $('#id_horario').val();
    turnou = $('#turnou').val();
    cursou = $('#cursou').val();
    docenteu = $('#docenteu').val();
    gradou = $('#gradou').val();
    diau = $('#diau').val();

    cadena = "&id_horario=" + id_horario +
            "&turnou=" + turnou +
            "&cursou=" + cursou +
            "&docenteu=" + docenteu +
            "&gradou=" + gradou +
            "&diau=" + diau;

    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_horarios.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                $('#tabla_lunes').load('componentes/dias_horarios/tabla_lunes.php');
                $('#tabla_martes').load('componentes/dias_horarios/tabla_martes.php');
                $('#tabla_miercoles').load('componentes/dias_horarios/tabla_miercoles.php');
                $('#tabla_jueves').load('componentes/dias_horarios/tabla_jueves.php');
                $('#tabla_viernes').load('componentes/dias_horarios/tabla_viernes.php');

                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
