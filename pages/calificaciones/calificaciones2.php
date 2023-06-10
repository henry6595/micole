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
    alertify.success("modificado con exito");
    </script>';
}
if ($noti == 2) {
    echo '<script type="text/javascript">
    alertify.success("Agregado con exito");
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
            <h1> <i class='fa fa-edit'></i> <big><u>Calificaciones de Alumnos</u></big></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
                <li class="active">Gestionar notas</li>
            </ol>
        </section>

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

                                            <h5> <b>Ingrese una pequeña decripción:</b> </h5>
                                            <div  ><textarea class="form-control" placeholder="Ingresar la descripción y la fecha de la prueba" rows="2" name="descripcion_tipo" id="descripcion_tipo"></textarea></div>
                                            <br>
                                            <h5> <b>Ingrese el tipo de prueba:</b> </h5>
                                            <div >
                                                <select class="form-control select2" id="tipo" name="tipo" style="width: 100%;" required>
                                                    <option value="examen">Por examen</option>
                                                    <option value="practica">Por práctica</option>
                                                    <option value="tarea">Por tarea</option>
                                                </select>
                                            </div>
                                            <br>
                                            <h5> <b>Ingrese el curso:</b> </h5>
                                            <div >
                                                <select class="form-control select2" id="curso" name="curso" style="width: 100%;" required>
                                                    <?php
                                                    if ($_SESSION['user_rol'] == 4) {
                                                        $sql = "SELECT distinct curso from horario h join login l on l.dni = h.docente where h.docente = " . $_SESSION['user_dni'];
                                                    } else {
                                                        $sql = "SELECT distinct curso from horario ";
                                                    }
                                                    $result = DBi::$mysqli->query($sql);
                                                    while ($row = $result->fetch_array()) {
                                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                                    } // while
                                                    ?>    

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

    $_SESSION['selecttipo'] = '%';
    $_SESSION['selectcurso'] = '%';
    ?>





    <div class="content-wrapper">

        <!-- Content Header (Page header) -->


        <section class="content-header">
            <h1> <i class='fa fa-edit'></i> <big><u>Calificaciones de Alumnos</u></big></h1>
            <h4 style="color:green"><i><b><u><?php echo $grado_valor ?></u></b></i></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
                <li class="active">visualizar notas</li>
            </ol>
        </section>
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <?php
                        if ($_SESSION['user_rol'] == 4) {
                            $sql = "select distinct(tipo) from calificaciones_r cr where cr.dni = " . $_SESSION['dni'] . " and cr.grado =" . $_SESSION['cal_grado'];
                        } else {
                            $sql = "select distinct(tipo) from calificaciones_r cr where  cr.grado =" . $_SESSION['cal_grado'];
                        }
                        ?>
                        <div class="row">
                            <br> <div class="col-md-1"> </div>
                            <div class="col-md-3">
                                <label><font color="blue">Tipo :</font></label>
                                <select id="selecttipo" class="form-control select2" style="width: 100%;">                      
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
                                <label><font color="blue">Curso :</font></label>
                                <select id="selectcurso" class="form-control select2" style="width: 100%;">                      
                                    <option value="%">todos</option>
                                    <?php
                                    if ($_SESSION['user_rol'] == 4) {
                                        $sql = "select distinct(curso) from calificaciones_r cr where cr.dni = " . $_SESSION['dni'] . " and cr.grado =" . $_SESSION['cal_grado'];
                                    } else {
                                        $sql = "select distinct(curso) from calificaciones_r cr where  cr.grado =" . $_SESSION['cal_grado'];
                                    }


                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                    } // while
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <br><br>
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

    $('#selecttipo').change(function () {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#selecttipo').val(),
            url: 'php/selecttipo.php',
            success: function (r) {
                $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');
            }
        });
    });

    $('#selectcurso').change(function () {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#selectcurso').val(),
            url: 'php/selectcurso.php',
            success: function (r) {
                $('#tabla_ver_calificaciones').load('componentes/tabla_ver_calificaciones.php');
            }
        });
    });
</script>

