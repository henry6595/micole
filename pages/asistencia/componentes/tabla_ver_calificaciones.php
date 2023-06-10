
<?php
session_start();

require_once "../../../conexionbd/connectDB.php";
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

            <tr style="font-size:15px;background-color:green; color:white;" >
                <td class="col-sm-2"><b>Fecha</b></td>
                <td class="col-sm-2"><b>Mes</b></td>
                <td class="col-sm-2"><b>Grado</b></td>
                <td class="col-sm-2"><b>ver</b></td>
            </tr>

            <?php
          
                $selectmes = $_SESSION['selectmes'];
            
            $rol_number = $_SESSION['user_rol'] ;
            $grado = $_SESSION['cal_grado'];
            $dni = $_SESSION['user_dni'];

            
             $sql = "select ar.id, g.descripcion, m.mes_texto, ar.fecha, ar.mes, ar.grado from asistencia_r ar join mes m on m.id = ar.mes join grado g on g.id = ar.grado where m.mes_texto like '%$selectmes%' and ar.grado = '$grado'";
           
            
         

            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) { ?>

                <tr>
                    <td><?php echo $ver[3] ?></td>
                    <td><b><?php echo $ver[2] ?></b></td>
                    <td><b><?php echo $ver[1] ?></b></td>
                    <td>
                        <form action='asistencia_detalle.php' method='post' id="myForm">
                            <input type="hidden" id="id_asistencia" name="id_asistencia" value="<?php echo $ver[0] ?>">
                            <input type="hidden" id="id_fecha" name="id_fecha" value="<?php echo $ver[3] ?>">
                            <input type="hidden" id="id_mes" name="id_mes" value="<?php echo $ver[4] ?>">
                            <input type="hidden" id="id_grado" name="id_grado" value="<?php echo $ver[5] ?>">
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