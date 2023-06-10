
<?php
$total_imagenes = count(glob('../../imagenes_galeria/{*.jpeg,*.jpg,*.gif,*.png}', GLOB_BRACE));

$arr_exts = array("jpg", "gif", "png");
$path = "../../imagenes_galeria/";
$path2 = "../imagenes_galeria/";
$dir = opendir($path);
while ($elemento = readdir($dir)) {
    $ext = substr($elemento, -3);
    if (($elemento != '.') && ($elemento != '..') && in_array($ext, $arr_exts)) {
        echo '<div id="galeria-list">'
        . '<article class="col-md-3 col-sm-4 col-xs-6">'
        . '<div class="galeria col-md-12 col-sm-12 col-xs-12">'
        . '<div style="text-align: right"><i style="color:red" onclick="preguntarSiNo(\'' . $path . $elemento . '\')" class="glyphicon glyphicon-trash"></i>'
        . '</div><img style="width: 100%; height: 60%" src="' . $path2 . $elemento . '" border="1"><h3>' . substr($elemento, 0, -4) . '</h3>'
        . '</div>'
        . '</article>'
        . '</div>';
    }
}
closedir($dir);
?>
<style type="text/css">
    .galeria {
        height: 200px;
        background-color: #ffffff;
        border: 0;
        outline: 0;
        border-radius: 5px;
        box-shadow: 0 4px 7px rgba(0,0,0,0.16);
        color: #2B4D86;
        float: left;
        font-size: 20px;
        text-align: center;
        margin-bottom: 30px;
    }

    h3{
        font-size: 15px;
    }
    @media only screen and (max-width: 414px){
        #galeria-list{
            margin-top: 30px;
            display: inline-block;
        }

    }
</style>

<script>

    function preguntarSiNo(nombre_imagen) {
        alertify.confirm('Eliminar imagen', '¿Esta seguro de eliminar esta imagen?',
                function () {
                    eliminarDatos(nombre_imagen)
                }
        , function () {
            alertify.error('Se cancelo')
        });
    }

    function eliminarDatos(nombre_imagen) {

        cadena = "nombre_imagen=" + nombre_imagen;
        console.log("si pasa");
        $.ajax({
            type: "POST",
            url: "componentes/php/eliminarDatos.php",
            data: cadena,
            success: function (r) {
                if (r == 1) {
                    $('#galeria_imagenes').load('componentes/galeria_imagenes.php');
                    alertify.success("Eliminado con exito!");
                } else {
                    alertify.error("Fallo el servidor "+r);
                    console.log("Fallo el servidor "+r);
                }
            }
        });
    }
</script>