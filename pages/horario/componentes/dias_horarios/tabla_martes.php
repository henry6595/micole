<?php
include ('../../../../conexionbd/connectDB.php');
session_start();
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <br>
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

            <tr style="background-color:lightblue">
                <td><b>Turno</b></td>
                <td><b>Curso</b></td>
                <td><b>Docente</b></td>
                <td><b>Grado</b></td>
                <!--<td>Secci&oacute;n</td>-->
                <td><b>d&iacute;a</b></td>
                <td><b>Editar</b></td>
            </tr>

            <?php
            $sql = "SELECT h.indice,h.turno,h.curso,CONCAT(l.apellidos,' ,',l.nombres),g.descripcion,h.seccion,h.dia from horario h join grado g on g.id=h.grado left join login l on l.dni = h.docente where dia ='Martes' and grado ='" . $_SESSION['horario_grado'] . "' ";

            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4] . "||" .
                        $ver[5] . "||" .
                        $ver[6];
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
                   <!-- <td><?php echo $ver[5] ?></td> -->
                    <td><?php echo $ver[6] ?></td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion_horario" onclick="agregaformhorarios('<?php echo $datos ?>')">

                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>