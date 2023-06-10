<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>  
<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->
<?php
error_reporting(0);
$grado = $_GET['grado'];
$accion = $_GET['accion'];
$noti = $_GET['noti'];
if ($noti == 1) {
    echo '<script type="text/javascript">
    alertify.success("modificado con exito :)");
    </script>';
}
if ($noti == 2) {
    echo '<script type="text/javascript">
    alertify.success("Agregado con exito :)");
    </script>';
}

$grado_valor;

$_SESSION['cal_grado'] = $grado;
$_SESSION['cal_accion'] = $accion;
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


$dia = getdate()['wday'];
if ($dia == 0) {
    $dia_texto = "Domingo";
}
if ($dia == 1) {
    $dia_texto = "Lunes";
}
if ($dia == 2) {
    $dia_texto = "Martes";
}
if ($dia == 3) {
    $dia_texto = "Miercoles";
}
if ($dia == 4) {
    $dia_texto = "Jueves";
}
if ($dia == 5) {
    $dia_texto = "Viernes";
}
if ($dia == 6) {
    $dia_texto = "Sabado";
}
/* MESES */
$mes = getdate()['mon'];
if ($mes == 1) {
    $mes_texto = "Enero";
}
if ($mes == 2) {
    $mes_texto = "Febrero";
}
if ($mes == 3) {
    $mes_texto = "Marzo";
}
if ($dia == 4) {
    $mes_texto = "Abril";
}
if ($mes == 5) {
    $mes_texto = "Mayo";
}
if ($mes == 6) {
    $mes_texto = "Junio";
}
if ($mes == 7) {
    $mes_texto = "Julio";
}
if ($mes == 8) {
    $mes_texto = "Agosto";
}
if ($mes == 9) {
    $mes_texto = "Setiembre";
}
if ($mes == 10) {
    $mes_texto = "Octubre";
}
if ($mes == 11) {
    $mes_texto = "Noviembre";
}
if ($mes == 12) {
    $mes_texto = "Diciembre";
}
$fecha_larga = $dia_texto . ", " . getdate()['mday'] . " de " . $mes_texto;
?>

<?php if ($accion == "ingresar") { ?>
    <div class="content-wrapper">


        <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u> Gesti&oacute;n de asistencia</u></big></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item">Asistencia</li>
                <li class="active">Asistencia de alumnos</li>
            </ol>
        </section>


        <!--tabla producots-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <form action="componentes/agregarasistencias.php" method="post">   

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Ingrese Asistencia :</div>
                                        </div> <!-- /panel-heading -->

                                        <div class="panel-body">
                                            <h4> <b>Alumnos del <u><?php echo $grado_valor ?></u></b> </h4> 

                                            <b><font size="3" color="#2548F5"> Fecha de Asistencia &nbsp;&nbsp;: </font> <font size="3" color="#F96B48"><?php echo $fecha_larga; ?></font> </b>

                                            <h5> <b>Ingrese la asistencia :</b> </h5> 
                                            <div  id="tabla_calificaciones"></div>
                                        </div><!--panel-body-->

                                    </div><!--panel-default-->
                                </div><!-- /.col -->

                            </div><!-- /.row -->


                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <?php
} else {

    $_SESSION['selectmes'] = '';
    ?>





    <div class="content-wrapper">


        <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u>Gesti&oacute;n de asistencia</u></big></h1>
            <h4> <b>Alumnos del <u><?php echo $grado_valor ?></u></b> </h4> 
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Asistencia</a></li>
                <li class="active">Asistencia de alumnos</li>
            </ol>
        </section>
        <?php
        $sql = "select distinct(m.mes_texto) from asistencia_r ar join mes m on ar.mes = m.id where  ar.grado =" . $_SESSION['cal_grado'];
        ?>


        <!--tabla producots-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label><font color="blue">Mes :</font></label>
                                <select id="selectmes" class="form-control select2" style="width: 100%;">                      
                                    <option value="%">todos</option> 
                                    <?php
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    } // while
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Boton agregar excel -->
                                <div class="panel-body">

                                    <div  id="tabla_ver_calificaciones"></div>
                                </div><!--panel-body-->

                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
        </section>


    </div>




<?php } ?>
<?php include ('../../includes/footer.php'); ?>


<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla_calificaciones').load('componentes/tabla_calificaciones.php');
        $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');


    });

    $('#selectmes').change(function () {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#selectmes').val(),
            url: 'php/selectmes.php',
            success: function (r) {
                $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');
            }
        });
    });

</script>

