<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
require_once ('./componentes/userModalcurso.php');
?>

<script src="js/funciones.js"></script> 
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Cursos</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Configuraciones</a></li>
            <li class="active">Gestionar cursos</li>
        </ol>
    </section>

    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Configuraci&oacute;n de cursos</div>
                                </div> <!-- /panel-heading -->

                                <div class="panel-body">
                                    <h4> <b>Establecer los cursos:</b> </h4> <br>
                                    <h5> Por favor configure los cursos a dictarse: </h5>


                                    <div id="tabla_cursos"></div>
                                </div><!--panel-body-->

                            </div><!--panel-default-->
                        </div><!-- /.col -->

                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6"> </div>
                        <div class="col-md-2"> 
                        </div>
                        <div class="col-md-2"> </div>
                        <div class="col-md-2">

                        </div><!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<?php include ('../../includes/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_cursos').load('componentes/tabla_cursos.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarnuevo_curso').click(function () {
            curso = $('#curso').val();
            descripcion = $('#descripcion').val();
            agregarcursos(curso, descripcion);
        });



        $('#actualizacursos').click(function () {

            actualizacursos();
        });

    });
</script>