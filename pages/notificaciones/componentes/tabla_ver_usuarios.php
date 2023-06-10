
<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>
<style>
    input[type=checkbox]
    {
        /* Doble-tamaño Checkboxes */
        -ms-transform: scale(2); /* IE */
        -moz-transform: scale(2); /* FF */
        -webkit-transform: scale(2); /* Safari y Chrome */
        -o-transform: scale(2); /* Opera */
        padding: 10px;
    }
</style>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

            <tr style="font-size:15px;background-color:green; color:white;" >
                <td class="col-sm-2"><b>Seleccionar</b></td>
                <td class="col-sm-10"><b>Nombre de Usuario</b></td>
            </tr>

            <?php
            if ($_SESSION['noti_grado'] == null && $_SESSION['noti_usuarios'] != 7) {
                $sql = "select l.id, CONCAT(l.nombres,' ',l.apellidos) as usuario , l.dni,l.email from login l where l.rol=" . $_SESSION['noti_usuarios'] . " and l.situacion=1";
            } else {
                $sql = "select l.id, CONCAT(l.nombres,' ',l.apellidos) as usuario, l.dni,l.email from login l join estudiantes e on e.dni = l.dni where l.rol=7 and e.grado =" . $_SESSION['noti_grado'] . " and l.situacion=1";
            }

            $contador = 0;

            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                $contador = $contador + 1;
                ?>

                <tr>
                    <td><input type="checkbox" value="<?php echo $ver[0] ?>" id="id_noti<?php echo $contador ?>" name="id_noti<?php echo $contador ?>" class="up"></td>
                    <td><b><?php echo $ver[1] ?></b></td>
                </tr>
                <input type="hidden" value="<?php echo $ver[2] ?>" name="id_noti_dni<?php echo $contador ?>" id="id_noti_dni<?php echo $contador ?>">
                <input type="hidden" value="<?php echo $ver[1] ?>" name="user<?php echo $contador ?>" id="user<?php echo $contador ?>">
                <input type="hidden" value="<?php echo $ver[3] ?>" name="id_noti_email<?php echo $contador ?>" id="id_noti_email<?php echo $contador ?>"> 

                <?php
            }
            ?>
        </table>
        <input id="contador" name="contador" type="hidden" value="<?php echo $contador ?>" readonly="">



    </div>
</div>
