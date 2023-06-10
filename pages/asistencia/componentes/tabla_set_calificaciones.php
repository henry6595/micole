<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>
 <script src="toggle/js/bootstrap-toggle.js" type="text/javascript"></script>
        <link href="toggle/css/bootstrap-toggle.css" rel="stylesheet" type="text/css"/>
   
<div class="row">
    <div class="col-sm-12 table-responsive">

        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">
            <tr style="background-color:#FFDB6D">
                <td><b>Alumno</b></td>
                <td><b>Asistencia</b></td>
            </tr>

            <?php
            $sql = "select * from asistencia a where a.mes=" . $_SESSION['a_id_mes'] . "  and a.fecha = '" . $_SESSION['a_id_fecha'] . "' and a.grado=" . $_SESSION['cal_grado'] . " order by a.alumno";
            $contador = 0;
            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                $contador = $contador + 1;
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <?php if ($ver[2] == 'ASISTIO') { ?>
                        <td> <input type="checkbox" id="asistencia<?php echo $contador ?>" name="asistencia<?php echo $contador ?>" checked data-toggle="toggle" data-on="Asistió" data-off="No asistió" data-onstyle="success" data-offstyle="danger" name="toggle"></td>
                    <?php } else { ?>
                        <td> <input type="checkbox" id="asistencia<?php echo $contador ?>" name="asistencia<?php echo $contador ?>"  data-toggle="toggle" data-on="Asistió" data-off="No asistió" data-onstyle="success" data-offstyle="danger" name="toggle"></td>
                    <?php } ?>
                </tr>
                <input id="id_asistencia_alumno<?php echo $contador ?>" name="id_asistencia_alumno<?php echo $contador ?>" type="hidden" maxlength="40" size="40" value="<?php echo $ver[0] ?>" readonly="">
                <input id="dni_estudiante<?php echo $contador ?>" name="dni_estudiante<?php echo $contador ?>" type="hidden" value="<?php echo $ver[7] ?>" readonly="">

                <?php
            }
            ?>
        </table>
        <input id="contador" name="contador" type="hidden" value="<?php echo $contador ?>" readonly="">
        <center>
            <input type="submit" value="Modificar Asistencias" class="btn btn-warning">
        </center>
    </div>
</div>
<div class="row">
    <div class="col-md-3"> </div>
    <div class="col-md-3">
    </div><!-- /.col -->
    <div class="col-md-6"></div>
</div>
