
<?php
session_start();
require_once "../../../conexionbd/connectDB.php";
?>

<div class="col-sm-12 table-responsive">
    <br>
    <center>
        <table  style="width: 95%;text-align:center;" class="table  table-hover table-condensed table-bordered">

            <tr style="background-color:orange">
                <td WIDTH="9%"><b>Fecha</b></td>
                <td WIDTH="20%"><b>Asunto</b></td>
                <td WIDTH="40%">Mensaje</td>
                <td WIDTH="15%">Remitente</td>
                <td WIDTH="10%"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp; Rol</td>	
            </tr>

            <?php
            $sql = "select n.fecha, n.asunto , n.mensaje, CONCAT(l.nombres,' ',l.apellidos), ru.rol_name from notificaciones n join login l on l.dni = n.remitente join roles_usuarios ru on ru.ID = l.rol where n.destinatario=" . $_SESSION['user_dni'] . "";


            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                ?>

                <tr>
                    <td><?php echo $ver[0] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>

                </tr>
                <?php
            }
            ?>
        </table>
    </center>
</div>
