<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');

error_reporting(0);
$noti = $_GET['noti'];

if ($noti == 2) {
    echo '<script type="text/javascript">
    alertify.success("Notificaciones enviadas");
    </script>';
}
?>
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u> Gesti&oacute;n de notificaciones</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item">Notificaciones </li>
            <li class="active">Enviar notificaciòn</li>
        </ol>
    </section>

    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <form action="notificaciones2.php" method="post">   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Comunicados </div>
                                    </div> <!-- /panel-heading -->

                                    <div class="panel-body">
                                        <h4> <b>Seleccionar los parametros de envío :</b> </h4> <br>
                                        <h5> Por favor ingrese el <b>tipo de usuario</b> al cual desea enviar una notificación: </h5>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Usuarios a notificar :</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" id="usuarios" name="usuarios" style="width: 100%;" onchange="mostrar_grado();" required>
                                                    <option value="">Seleccione</option>
                                                    <?php
                                                    $sql = "select DISTINCT ru.* from login l join roles_usuarios ru on ru.ID = l.rol where ru.id != 1 order by ru.id";
                                                    $result = DBi::$mysqli->query($sql);
                                                    while ($row = $result->fetch_array()) {
                                                        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                    } // while
                                                    ?>                                     
                                                </select>
                                            </div>
                                        </div>

                                    </div><!--panel-body-->


                                    <div class="panel-body" id="grado_notificacion" style="display: none;">
                                        <h5> Por favor ingrese el <b>grado</b> al cual desea enviar la notificación: </h5>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Grado :</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" id="grado" name="grado" style="width: 100%;" onchange="mostrar_grado();" >
                                                    <option value="">Seleccionar</option>
                                                    <?php
                                                    $sql = "select id, descripcion from grado where id BETWEEN 16 and 25";
                                                    $result = DBi::$mysqli->query($sql);
                                                    while ($row = $result->fetch_array()) {
                                                        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                    }
                                                    ?> 
                                                </select>
                                            </div>
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