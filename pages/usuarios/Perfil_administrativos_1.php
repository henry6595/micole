<!DOCTYPE html>
<?php 
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
error_reporting(0);

$noti=$_GET['noti'];
if($noti==1){
    echo '<script type="text/javascript">
    alertify.success("modificado con exito");
    </script>';
}
?>
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->
<?php
$uploadedfileload = "true";
$uploadedfile_size = $_FILES['uploadedfile2'][size];
if ($_FILES[uploadedfile2][size] > 200000) {
    $msg = $msg . "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo";
    $uploadedfileload = "false";
}
if (!($_FILES[uploadedfile2][type] == "image/jpeg" OR $_FILES[uploadedfile2][type] == "image/gif" OR $_FILES[uploadedfile2][type] == "image/png")) {
    $msg = $msg . " Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos";
    $uploadedfileload = "false";
}
$add = "fotos_perfil/" . $_SESSION['user_dni'] . ".jpeg";
if ($uploadedfileload == "true") {
    if (move_uploaded_file($_FILES[uploadedfile2][tmp_name], $add)) {
        echo '<script type="text/javascript">
    </script>';
    } else {
        echo '<script type="text/javascript">
    alert("Error al subir el archivo, Error:' . $msg . '");
    </script>';
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Perfil Administrativos</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Perfil</a></li>
            <li class="active">Ver perfil</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <div id="load_img">
                            <center>
                                <?php
                                $foto_perfil = "../../pages/usuarios/fotos_perfil/" . $_SESSION['user_dni'] . ".jpeg";

                                if (file_exists($foto_perfil)) {
                                    ?>
                                    <img class=" img-responsive" src="../../pages/usuarios/fotos_perfil/<?php echo $_SESSION['user_dni'] . ".jpeg" ?>" alt="usuario">
                                <?php } else { ?>
                                    <img class=" img-responsive" src="../../assests/images/usuario.png" alt="usuario">

                                <?php } ?>
                            </center>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
            <div class="col-md-9">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <div id="DatosPerfil">
                            <h2> <center><?php echo $_SESSION['user_nombres'] . " " . $_SESSION['user_apellidos']; ?> </center> </h2>
                            <br>
                            <h4> <center><?php echo $_SESSION['user_rol_nombre']; ?></center> </h4>
                        </div>
                        <b>Cambiar foto de perfil</b>
                        <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                        <div id="content" style="display: none;">
                            <form enctype="multipart/form-data" action="" method="POST">
                                <input name="uploadedfile2" type="file">
                                <input type="submit" value="Subir archivo">
                            </form> 

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <div id="DatosPerfil_2">
                            <form method="POST" action="Perfil_administrativos_2.php"  class="form-horizontal" id="perfilform" accept-charset="utf-8">
                                <div class="form-group ">     
                                    <label class="col-sm-3 control-label">Nombres</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_nombres']; ?>" id="nombre" name="nombre"autocomplete="off" placeholder="Ingresar Nombre" disabled>
                                    </div>
                                </div> 
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label">Apellidos</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_apellidos']; ?>" id="apellido" name="apellido" placeholder="Ingresar Apellidos" autocomplete="off" disabled>
                                    </div>
                                </div> 
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label">DNI</label>
                                    <div class="col-sm-6">
                                        <input  type="text"  class="form-control" id="iddni" name="iddni" value="<?php echo $_SESSION['user_dni']; ?>" placeholder="Ingresar DNI"  readonly="">
                                    </div>
                                </div> 
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label">Celular</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $_SESSION['user_celular']; ?>" placeholder="Ingrese Celular" autocomplete="off" required>
                                    </div>
                                </div> 
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label">Correo</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com"  value="<?php echo $_SESSION['user_email']; ?>" autocomplete="off" required>
                                    </div>
                                </div> 
                                Si desea cambiar la contraseña ingrese la nueva contraseña, caso contrario déjelo tal como está.
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label">Nueva Contraseña </label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" value="<?php echo $_SESSION['user_password']; ?>" id="password" name="password" placeholder="example@gmail.com"  autocomplete="off" required>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-offset-7 col-md-6">                             
                                        <button type="submit" id='validate' class="btn btn-success">Actualizar</button>    
                                    </div>
                                </div>             
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
    </section>
</div> <!-- content-wrapper -->

<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
</script>

<?php include ('../../includes/footer.php'); ?>
  