
<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

            <tr style="font-size:15px;background-color:green; color:white;" >
                <td class="col-sm-2"><b>Curso</b></td>
                <td class="col-sm-2"><b>tipo</b></td>
                <td class="col-sm-2"><b>fecha</b></td>
                <td class="col-sm-2"><b>ver</b></td>
            </tr>

<?php
$selecttipo = $_SESSION['selecttipo'];
$selectcurso = $_SESSION['selectcurso'];

$rol_number = $_SESSION['user_rol'];
$grado = $_SESSION['cal_grado'];
$dni = $_SESSION['user_dni'];


if ($rol_number == 4) {

    $sql = "select * from calificaciones_r cr join grado g on cr.grado = g.id where cr.curso like '$selectcurso' and cr.tipo like '$selecttipo' and cr.dni = '$dni' and g.id='$grado'";

    //echo $sql;
} else {
    $sql = "select * from calificaciones_r cr join grado g on cr.grado = g.id where cr.curso like '$selectcurso' and cr.tipo like '$selecttipo' and g.id='$grado'";
}



$result = mysqli_query(DBi::$mysqli, $sql);
while ($ver = mysqli_fetch_row($result)) {

    $datos = $ver[0] . "||" .
            $ver[1] . "||" .
            $ver[2] . "||" .
            $ver[3] . "||" .
            $ver[4] . "||" .
            $ver[5] . "||" .
            $ver[7];
    ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><b><?php echo $ver[3] ?></b></td>
                    <td><?php echo $ver[5] ?></td>
                    <td>
                        <form action='examen_detalle.php' method='post' id="myForm">
                            <input type="hidden" id="id_evaluación" name="id_evaluación" value="<?php echo $ver[0] ?>">
                            <input type="hidden" id="id_curso" name="id_curso" value="<?php echo $ver[1] ?>">
                            <input type="hidden" id="id_grado" name="id_grado" value="<?php echo $ver[2] ?>">
                            <input type="hidden" id="id_tipo" name="id_tipo" value="<?php echo $ver[3] ?>">
                            <input type="hidden" id="id_docente" name="id_docente" value="<?php echo $ver[4] ?>">
                            <input type="hidden" id="id_fecha" name="id_fecha" value="<?php echo $ver[5] ?>">
                            <button class=" btn btn-warning glyphicon glyphicon-eye-open" onclick="document.getElementById('myForm').submit()"></button>
                        </form>
                    </td>

                </tr>
    <?php
}
?>
        </table>



    </div>
</div>
<div class="row">
    <div class="col-md-3"> </div>
    <div class="col-md-3">
    </div><!-- /.col -->
    <div class="col-md-6"></div>
</div>