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
?>

<?php if ($accion == "ingresar") { ?>
    <div class="content-wrapper">


        <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u>Conducta</u></big></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
                <li class="active">Conducta</li>
            </ol>
        </section>

        <br>
        <!--tabla producots-->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <form action="componentes/agregarnotas.php" method="post">   

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Ingrese notas :</div>
                                        </div> <!-- /panel-heading -->

                                        <div class="panel-body">
                                            <h4> <b>Alumnos del <u><?php echo $grado_valor ?></u></b> </h4> 


                                            <h5> <b>Ingrese el periodo de evaluaci&oacute;n:</b> </h5>
                                            <div >
                                                <select class="form-control select2" id="periodo" name="periodo" style="width: 100%;" required>
                                                    <option value="Primer Bimestre">Primer Bimestre</option>
                                                    <option value="Segundo Bimestre">Segundo Bimestre</option>
                                                    <option value="Tercer Bimestre">Tercer Bimestre</option>
                                                    <option value="Cuarto Bimestre">Cuarto Bimestre</option>

                                                </select>
                                            </div>
                                            <br>
                                            <h5> <b>Ingrese las notas:</b> </h5> 
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


    $_SESSION['selectalumnos'] = '';
    $_SESSION['selectperiodo'] = '';
    ?>

    <div class="content-wrapper">

        <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u>Conducta de Alumnos</u></big></h1>
            <h4> <b>Alumnos del <u><?php echo $grado_valor ?></u></b> </h4> 
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Conducta</a></li>
                <li class="active">Ver notas</li>
            </ol>
        </section>

        <?php
        $sql = "select distinct(alumno) from conducta cr where  cr.grado =" . $_SESSION['cal_grado'] . " order by alumno asc";
        ?>
        <!--tabla producots-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label><font color="blue">Alumnos :</font></label>
                                <select id="selectalumnos" class="form-control select2" style="width: 100%;">                      
                                    <option value="%">todos</option> 
                                    <?php
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    } // while
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label><font color="blue">Periodo :</font></label>
                                <select id="selectperiodo" class="form-control select2" style="width: 100%;">                      
                                    <option value="%">todos</option>
                                    <?php
                                    $sql = "select distinct(periodo) from conducta c where  c.grado =" . $_SESSION['cal_grado'];
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

    $('#selectalumnos').change(function () {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#selectalumnos').val(),
            url: 'php/selectalumnos.php',
            success: function (r) {
                $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');
            }
        });
    });

    $('#selectperiodo').change(function () {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#selectperiodo').val(),
            url: 'php/selectperiodo.php',
            success: function (r) {
                $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');
            }
        });
    });
</script>

