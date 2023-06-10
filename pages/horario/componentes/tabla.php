
<?php
require_once "../../../conexionbd/connectDB.php";
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <br>
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar nuevo 
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <tr style="background-color:orange">
                <td><b>Hora Inicio</b></td>
                <td><b>Hora Final</b></td>
                <td><b>Descripción</b></td>
                <td><b>Orden</b></td>
                <td><b>Editar</b></td>
                <td><b>Eliminar</b></td>
            </tr>

            <?php
            $sql = "SELECT * from hora_horario order by orden";


            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4];
                ?>

                <tr>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" 
                                onclick="preguntarSiNo('<?php echo $ver[0] ?>')">

                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>