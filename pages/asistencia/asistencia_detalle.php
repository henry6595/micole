<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>

<!-- Content Wrapper. Contains page content -->
<?php
$id_asistencia = $_POST["id_asistencia"];
$id_fecha = $_POST["id_fecha"];
$id_mes = $_POST["id_mes"];
$id_grado = $_POST["id_grado"];

switch ($id_grado) {
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

$_SESSION['a_id_asistencia'] = $id_asistencia;
$_SESSION['a_id_fecha'] = $id_fecha;
$_SESSION['a_id_mes'] = $id_mes;
$_SESSION['a_id_grado'] = $id_grado;


$myDate3 = new DateTime($id_fecha);
$formatFI3 = $myDate3->format('d/m/Y');
?>  

<div class="content-wrapper">


      <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u>Gesti&oacute;n de asistencia</u></big></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Asistencia</a></li>
                <li class="active">Asistencia de alumnos</li>
            </ol>
        </section>

    <!--tabla producots-->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Asistencia de Alumnos</div>
                    </div> <!-- /panel-heading -->
                    <form action="componentes/modificarnotas.php" method="post">   
                        <div class="panel-body">
                            <h4> <b>Alumnos del <u><?php echo $grado_valor ?> </u></b> (modificar asistencia)</h4> 
                            <b><font size="3" color="#2548F5"> Fecha de Asistencia &nbsp;&nbsp;: </font> <font size="3" color="#F96B48"><?php echo $formatFI3; ?></font> </b>

                            <h5> <b>Ingrese la asistencia :</b> </h5> 
                            <div  id="tabla_set_calificaciones"></div>
                        </div><!--panel-body-->
                    </form>

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
    </section>


</div>

<?php include ('../../includes/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_set_calificaciones').load('componentes/tabla_set_calificaciones.php');

    });

</script>
