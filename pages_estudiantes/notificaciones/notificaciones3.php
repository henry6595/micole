<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
error_reporting(0);
$grado = $_SESSION['noti_grado'];
$usuarios = $_SESSION['noti_usuarios'];

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
            <li class="active">Enviar notificación - parte 3</li>
        </ol>
    </section>

    <!--tabla producots-->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">

                    <form action="envio_noti.php" method="post">   

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
                                        <font size="2" color="#000"> Destinatarios : </font> <br>



                                        <?php
                                        $contador = $_POST["contador"];
                                        $email_noti = array();
                                        $dni_dest_noti = array();
                                        while ($contador > 0) {
                                            $id_noti = $_POST["id_noti" . $contador];

                                            if (isset($id_noti)) {
                                                $user = $_POST["user" . $contador];
                                                $id_noti_email = $_POST["id_noti_email" . $contador];
                                                $id_noti_dni = $_POST["id_noti_dni" . $contador];
                                                ?>
                                                <b><font size="2" color="#000"> - </font> </b><font size="2" color="#000"><?php echo $user; ?></font><br>
                                                <?php
                                                array_push($email_noti, $id_noti_email);
                                                array_push($dni_dest_noti, $id_noti_dni);
                                            }
                                            $contador = $contador - 1;
                                        }
                                        $_SESSION['array_email'] = $email_noti;
                                        $_SESSION['array_dest_dni'] = $dni_dest_noti;
                                        ?>

                                        <div class="form-group">
                                            <label><h5> Por favor <b> escriba el asunto</b> de la notificación : </h5></label>
                                            <input type="text" class="form-control" id="asunto" name="asunto"  placeholder="Escriba aquí ...">
                                        </div>

                                        <div class="form-group">
                                            <label><h5> Por favor <b> escriba el mensaje</b> a enviar: </h5></label>
                                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escriba aquí ..."></textarea>
                                        </div>

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


    function mostrar_grado() {
        var a = document.getElementById('usuarios').value;
        if (a === '7') {
            document.getElementById('grado_notificacion').style.display = 'block';
        } else {
            document.getElementById('grado_notificacion').style.display = 'none';
        }
    }

</script>