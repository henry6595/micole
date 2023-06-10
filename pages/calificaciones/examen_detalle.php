<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
?>

<!-- Content Wrapper. Contains page content -->
<?php
error_reporting(0);
$id_evaluación = $_POST["id_evaluación"];
$id_curso = $_POST["id_curso"];
$id_grado = $_POST["id_grado"];
$id_tipo = $_POST["id_tipo"];
$id_docente = $_POST["id_docente"];
$id_fecha = $_POST["id_fecha"];

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

$_SESSION['id_evaluación'] = $id_evaluación;
$_SESSION['id_curso'] = $id_curso;
$_SESSION['id_grado'] = $id_grado;
$_SESSION['id_tipo'] = $id_tipo;
$_SESSION['id_docente'] = $id_docente;
$_SESSION['id_fecha'] = $id_fecha;
?>  
<div class="content-wrapper">

    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Detalle de examen</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Horario</a></li>
            <li class="active">Detalle de examen</li>
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
                                    <div class="page-heading"><i class="glyphicon glyphicon-edit"></i>Detalle de la evaluación</div>
                                </div> <!-- /panel-heading -->

                                <form action="componentes/modificarnotas.php" method="post">   
                                    <div class="panel-body">
                                        <h4> <i class='fa fa-check'></i> <?php echo $id_curso; ?></h4>
                                        <h4> <i class='fa fa-check'></i> <?php echo $id_tipo; ?></h4>
                                        <h5> <i class='fa fa-check'></i> <?php echo $grado_valor; ?></h5>
                                        <h5> <i class='fa fa-check'></i> <?php echo $id_fecha; ?></h5>

                                        <h4> <b><u>Notas:</u></b> </h4> <br>
                                        <div  id="tabla_set_calificaciones"></div>
                                    </div><!--panel-body-->
                                </form>

                            </div><!--panel-default-->
                        </div><!-- /.col -->

                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </section>


</div>

<?php include ('../../includes/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_set_calificaciones').load('componentes/tabla_set_calificaciones.php');

    });

</script>
