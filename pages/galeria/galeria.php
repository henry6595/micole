<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
error_reporting(0);
?>

<?php
$uploadedfileload = "true";
$uploadedfile_size = $_FILES['uploadedfile2'][size];
if ($_FILES[uploadedfile2][size] > 200000) {
    $msg = $msg . "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo";
    $uploadedfileload = "false";
}

if (!($_FILES[uploadedfile2][type] == "image/jpeg" OR $_FILES[uploadedfile2][type] == "image/gif" OR $_FILES[uploadedfile2][type] == "image/png")) {
    $msg = $msg . " Tu archivo tiene que ser JPG, PNG o GIF. Otros archivos no son permitidos";
    $uploadedfileload = "false";
}
$nombre_imagen = $_POST['nombre_imagen'];

$add = "../imagenes_galeria/" . $nombre_imagen . ".jpg";
if ($uploadedfileload == "true") {

    if (move_uploaded_file($_FILES[uploadedfile2][tmp_name], $add)) {
        echo '<script type="text/javascript">
    alertify.success("imagen subida");
    </script>';
    } else {
        echo '<script type="text/javascript">
    alertify.error("Error al subir el archivo, Error:' . $msg . '");
    </script>';
    }
}
//Fin cambiar Perfil
?>
<script src="toggle/js/bootstrap-toggle.js" type="text/javascript"></script>
<link href="toggle/css/bootstrap-toggle.css" rel="stylesheet" type="text/css"/>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Galería de imagenes</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Galeria</a></li>
            <li class="active">Ver imagenes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <input type="checkbox" id="galeria_ingresar" checked name="galeria_ingresar"  data-toggle="toggle" data-on="ver" data-off="Ingresar" data-onstyle="success" data-offstyle="primary" name="toggle" onchange="muestra_oculta('ingresar_imagenes')">
                        <br><br>
                        <div id="ingresar_imagenes" class="box box-primary" style="display: none;">
                            <div id="content" >
                                <form enctype="multipart/form-data" action="" method="POST">
                                    <br>
                                    <input placeholder="Nombre de imagen" name="nombre_imagen" type="text">
                                    <br><br>
                                    <input name="uploadedfile2" type="file">
                                    <input type="submit" value="Subir archivo">
                                </form> 
                            </div>
                        </div>
                        <section  class="col-md-12 col-sm-12 col-xs-12 ">
                            <div id="galeria_imagenes"></div>
                        </section>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section>
</div> <!-- content-wrapper -->

<?php
include ('../../includes/footer.php');
?>
<script type="text/javascript">

    function muestra_oculta(id) {
        if (document.getElementById) { //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }

    $(document).ready(function () {
        $('#galeria_imagenes').load('componentes/galeria_imagenes.php');
    });
</script>
