<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
require_once ('./componentes/userModalhorario.php');
?>
<script src="../../pages/horario/js/funciones.js"></script> 

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Horario</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Horario</a></li>
            <li class="active">Gestionar horario</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Creaci&oacute;n de horario - parte 1</div>
                        </div> <!-- /panel-heading -->

                        <div class="panel-body">
                            <h4> <b>Establecer cantidad de horas :</b> </h4> <br>
                            <h5> Por favor estime la cantidad tiempo que le 
                                abarcará cada hora de clase así como la cantidad de horas de clase.</h5>
                            <div id="tabla"></div>
                        </div><!--panel-body-->
                        <div class="panel-body">
                            <div class="col-md-6"> </div>
                            <div class="col-md-2"> 
                                <div class="col-md-2">

                                    <button  type="button" class="btn btn-info" onclick="preguntarSiNoGH()">
                                        Generar esquema
                                        <span class="fa fa-angle-double-right"></span>
                                    </button>

                                </div><!-- /.col -->
                            </div>
                            <div class="col-md-2"> </div>
                            <div class="col-md-2">

                                <button class="btn btn-success" onclick="window.location = 'horarios2.php';">
                                    Siguiente
                                    <span class="fa fa-angle-double-right"></span>
                                </button>

                            </div><!-- /.col -->
                        </div>
                    </div><!--panel-default-->
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section>


</div>

<?php include ('../../includes/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('componentes/tabla.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarnuevo').click(function () {
            hora_inicial = $('#hora_inicial').val();
            hora_final = $('#hora_final').val();
            descripcion = $('#descripcion').val();
            orden = $('#orden').val();
            agregardatos(hora_inicial, hora_final, descripcion, orden);
        });



        $('#actualizadatos').click(function () {

            actualizaDatos();
        });

    });
</script>