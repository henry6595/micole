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
        <h1> <i class='fa fa-edit'></i> <big><u>Mi entorno</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Entorno</a></li>
            <li class="active">Mi entorno</li>
        </ol> 
    </section>

    <br>
    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Personal del centro educativo</div>
                                </div> <!-- /panel-heading -->

                                <!-- Boton agregar excel -->
                                <div class="panel-body">



                                    <div class="row">
                                        <div id="tabla_administrativos"></div>
                                    </div>
                                </div><!--panel-body-->

                            </div><!--panel-default-->
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </section>





</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_administrativos').load('controller/tabla_administrativos.php');
    });
</script>
<?php include ('../../includes/footer.php'); ?>



