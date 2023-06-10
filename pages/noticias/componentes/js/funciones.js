
$(document).ready(function () {
    $('#tabla_noticias').load('componentes/tabla_noticias.php');
    $('#buscador_noticias').load('componentes/buscador_noticias.php');
});



$('#guardarnuevo').click(function () {
    titulo = $('#titulo').val();
    palabra_clave = $('#palabra_clave').val();
    descripcion = $('#descripcion').val();
    nombre_imagen = $('#nombre_imagen').val();
    agregardatos(titulo, palabra_clave, descripcion, nombre_imagen);
});

function agregardatos(titulo, palabra_clave, descripcion, nombre_imagen) {

    cadena = "titulo=" + titulo +
            "&palabra_clave=" + palabra_clave +
            "&descripcion=" + descripcion +
            "&nombre_imagen=" + nombre_imagen;

    $.ajax({
        type: "POST",
        url: "componentes/php/agregarDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla_noticias').load('componentes/tabla_noticias.php');
                $('#buscador_noticias').load('componentes/buscador_noticias.php');
                alertify.success("agregado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });

}

function agregaform(datos) {
    d = datos.split('||');

    $('#e_id').val(d[0]);
    $('#e_titulo').val(d[1]);
    $('#e_descripcion').val(d[2]);
    $('#e_nombre_imagen').val(d[3]);
    $('#e_palabra_clave').val(d[4]);

}

$('#actualizadatos').click(function () {
    actualizaDatos();

});

function actualizaDatos() {


    e_id = $('#e_id').val();
    e_titulo = $('#e_titulo').val();
    e_palabra_clave = $('#e_palabra_clave').val();
    e_descripcion = $('#e_descripcion').val();
    e_nombre_imagen = $('#e_nombre_imagen').val();

    cadena = "e_id=" + e_id +
            "&e_titulo=" + e_titulo +
            "&e_palabra_clave=" + e_palabra_clave +
            "&e_descripcion=" + e_descripcion +
            "&e_nombre_imagen=" + e_nombre_imagen;


    $.ajax({
        type: "POST",
        url: "componentes/php/actualizaDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla_noticias').load('componentes/tabla_noticias.php');
                $('#buscador_noticias').load('componentes/buscador_noticias.php');
                alertify.success("agregado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });

}

function preguntarSiNo(id) {
    alertify.confirm('Eliminar Noticia', '¿Esta seguro de eliminar esta noticia?',
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
        url: "componentes/php/eliminarDatos.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla_noticias').load('componentes/tabla_noticias.php');
                $('#buscador_noticias').load('componentes/buscador_noticias.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}