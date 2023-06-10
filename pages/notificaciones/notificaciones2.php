<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
error_reporting(0);
$grado = $_POST['grado'];
$usuarios = $_POST['usuarios'];
$_SESSION['noti_grado'] = $grado;
$_SESSION['noti_usuarios'] = $usuarios;

switch ($grado) {
    case 16:
        $grado_valor = "Sexto grado de primaria";
        break;
    case 21:
        $grado_valor = "1er grado de secundaria";
        break;
    case 22:
        $grado_valor = "2do grado de secundaria";
        break;
    case 23:
        $grado_valor = "3er grado de secundaria";
        break;
    case 24:
        $grado_valor = "4to grado de secundaria";
        break;
    case 25:
        $grado_valor = "5to grado de secundaria";
        break;
}

switch ($usuarios) {
    case 2:
        $usuarios_valor = "Director";
        break;
    case 3:
        $usuarios_valor = "SubDirector";
        break;
    case 4:
        $usuarios_valor = "Docente";
        break;
    case 5:
        $usuarios_valor = "Auxiliar";
        break;
    case 6:
        $usuarios_valor = "Administrativo";
        break;
    case 7:
        $usuarios_valor = "Estudiante";
        break;
}
?>
<style>
    textarea {
        resize: both;
        overflow: auto;
    }
</style>
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u> Gesti&oacute;n de notificaciones</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item">Notificaciones </li>
            <li class="active">Enviar notificación - parte 2</li>
        </ol>
    </section>

    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">

                    <form action="notificaciones3.php" method="post">   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Comunicados - Parte 2 </div>
                                    </div> <!-- /panel-heading -->

                                    <div class="panel-body">
                                        <b><font size="3" color="#2548F5"> Rol destinatario : </font> <font size="3" color="#F96B48"><?php echo $usuarios_valor; ?></font> </b><br>
                                        <?php if ($usuarios == 7) { ?>
                                            <b><font size="3" color="#2548F5"> Grado : </font> <font size="3" color="#F96B48"><?php echo $grado_valor; ?></font> </b><br>
                                        <?php }
                                        ?>

                                        <h5> Por favor elija los <b>usuarios específicos </b> al cual desea enviar una notificación: </h5>
                                        <div  id="tabla_ver_usuarios"></div>
                                    </div><!--panel-body-->

                                </div><!--panel-default-->
                            </div><!-- /.col -->

                        </div><!-- /.row -->


                        <div class="row">
                            <div class="col-md-4"> 

                            </div>

                            <div class="col-md-4"> </div>
                            <div class="col-md-4">
                                <center>
                                    <input type="submit" value="Siguiente" class="btn btn-success">
                                </center>
                                <br><br>
                            </div><!-- /.col -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</div>

<?php include ('../../includes/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_ver_usuarios').load('componentes/tabla_ver_usuarios.php');
    });
</script>