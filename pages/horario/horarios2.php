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
        <h1> <i class='fa fa-edit'></i> <big><u>Horario</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Horario</a></li>
            <li class="active">Gestionar horario - part2</li>
        </ol>
    </section>


    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">

                    <form action="horarios3.php" method="post">   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Creaci&oacute;n de horario - parte 2</div>
                                    </div> <!-- /panel-heading -->

                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-warning" onclick="window.location = 'horarios.php';">
                                                <span class="fa fa-angle-double-left"></span>
                                                Anterior
                                            </button>

                                        </div><!-- /.col -->
                                        <div class="col-md-10"> </div>
                                    </div>

                                    <br>
                                    <div class="panel-body">
                                        <h4> <b>Seleccionar el grado del horario :</b> </h4> <br>
                                        <h5> Por favor ingrese el grado del cual desea modificar el horario: </h5>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Grado:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" id="grado" name="grado" style="width: 100%;" required>
                                                    <option value=""  selected>Seleccionar</option>
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
                            <div class="col-md-10"> </div>
                            <div class="col-md-2">

                                <button  onclick="document.forms[0].submit()" class="btn btn-success">
                                    Siguiente
                                    <span class="fa fa-angle-double-right"></span>
                                </button>
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


