<?php
require '../../../conexionbd/connectDB.php';
$sql = "SELECT id,titulo,descripcion,imagen,palabra_clave,fecha from noticias order by fecha desc";
$path2 = "../imagenes_galeria/";


$result = mysqli_query(DBi::$mysqli, $sql);

while ($ver = mysqli_fetch_row($result)) {
    $datos = $ver[0] . "||" .
            $ver[1] . "||" .
            $ver[2] . "||" .
            $ver[3] . "||" .
            $ver[4];


    echo '<div id="galeria-list">'
    . '<article class="col-md-3 col-sm-4 col-xs-6">'
    . '<div class="galeria col-md-12 col-sm-12 col-xs-12">'
    . '<div style="text-align: center"><i style="color:blue"  class="glyphicon glyphicon-eye-open"  data-toggle="modal" data-target="#modalVerNoticia" onclick="ver_noti(\'' . $datos . '\')" ></i>'
    . '</div><img style="width: 100%; height: 60%" src="' . $path2 . $ver[3] . ".jpg" . '" border="1"><h3>' . $ver[1] . '</h3><h4>'. $ver[5] .'<h4>'
    . '</div>'
    . '</article>'
    . '</div>';
}
?>
<style type="text/css">
    .galeria {
        height: 250px;
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
    function ver_noti(datos) {
        d = datos.split('||');
//
//        $('#v_id').val(d[0]);
//        $('#v_titulo').val(d[1]);
//        $('#v_descripcion').val(d[2]);
//        $('#v_nombre_imagen').val(d[3]);
//        $('#v_palabra_clave').val(d[4]);
        
        document.getElementById("v_imagen").innerHTML = '<img style="width: 100%; height: 300px" src="../imagenes_galeria/'+d[3]+'.jpg" border="1">';
        document.getElementById("v_titulo").innerHTML = '<b>'+d[1]+'</b>';
        document.getElementById("v_descripcion").innerHTML = d[2];
        
    }


</script>