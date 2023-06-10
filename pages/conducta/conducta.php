<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Conducta</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
            <li class="active">Conducta</li>
        </ol>
    </section>
    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <form action="conducta2.php" method="get">   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h4> <b>Seleccionar los parametros de calificaci&oacute;n :</b> </h4> <br>
                                        <h5> Por favor ingrese el GRADO el cual desea calificar: </h5>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Grado:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" id="grado" name="grado" style="width: 100%;" required>
                                                    <option value="">Seleccione</option>
                                                    <?php
                                                    $sql = "select distinct g.id,g.descripcion from horario h join grado g on g.id = h.grado";

                                                    $result = DBi::$mysqli->query($sql);
                                                    while ($row = $result->fetch_array()) {
                                                        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                    } // while
                                                    ?>                                     
                                                </select>
                                            </div>
                                        </div>

                                    </div><!--panel-body-->
                                    <br>
                                    <div class="panel-body">
                                        <h5> Por favor seleccione Ver Notas/Ingresar Notas </h5>
                                        <div  class="form-group">
                                            <label style="color:red;" class="col-sm-2 control-label"><b>Acci&oacute;n:</b></label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" id="accion" name="accion" style="width: 100%;" required>
                                                    <option value="">Seleccione</option>
                                                    <option value="ver">Ver Notas</option>
                                                    <option value="ingresar">Ingresar</option>
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


