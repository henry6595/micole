<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <center>
            <table  style="width: 50%;text-align:center;" class="table  table-hover table-condensed table-bordered">
                <tr style="background-color:lightblue">
                    <td><b>Alumno</b></td>
                    <td><b>Nota</b></td>
                </tr>

                <?php
                $sql = "SELECT * from estudiantes where grado=" . $_SESSION['cal_grado'] . " order by apellidos, nombres";

                $contador = 0;
                $result = mysqli_query(DBi::$mysqli, $sql);
                while ($ver = mysqli_fetch_row($result)) {
                    $contador = $contador + 1;
                    ?>

                    <tr>
                        <td><?php echo $ver[2] . " " . $ver[1] ?></td>
                    <input  id="alumno<?php echo $contador ?>" name="alumno<?php echo $contador ?>" type="hidden" maxlength="40" size="40" value="<?php echo $ver[2] . " " . $ver[1] ?>" readonly="">
                    <td> <input id="numero<?php echo $contador ?>" name="numero<?php echo $contador ?>" type="number" min="1" max="20" pattern="^[0-9]+" maxlength="2" size="2"></td>

                    </tr>
                    <input id="dni_estudiante<?php echo $contador ?>" name="dni_estudiante<?php echo $contador ?>" type="hidden" value="<?php echo $ver[0] ?>" readonly="">

                    <?php
                }
                ?>
            </table>
        </center>
        <input id="contador" name="contador" type="hidden" value="<?php echo $contador ?>" readonly="">
        <center>
            <input type="submit" value="Guardar Notas" class="btn btn-success">
        </center>
    </div>
</div>
<div class="row">
    <div class="col-md-3"> </div>
    <div class="col-md-3">
    </div><!-- /.col -->
    <div class="col-md-6"></div>
</div>