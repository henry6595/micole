
<?php
session_start();

require_once "../../../conexionbd/connectDB.php";
?>


<div class="row">
    <div class="col-sm-12 table-responsive">
        <form action='componentes/modificarconducta.php' method='post' id="myForm">   
            <center><button class=" btn btn-warning glyphicon glyphicon-thumbs-up" onclick="document.getElementById('myForm').submit()"> Actualizar</button></center><br>
            <table  style="width: 100%;text-align:center;" class="table  table-hover table-condensed table-bordered">

                <tr style="font-size:15px;background-color:green; color:white;" >
                    <td style="width:30%"><b>Alumno</b></td>
                    <td style="width:10%"><b>Nota</b></td>
                    <td style="width:35%"><b>Justificaci&oacute;n</b></td>
                    <td style="width:15%"><b>Periodo</b></td>
                </tr>

                <?php
                $selectalumnos = $_SESSION['selectalumnos'];
                $selectperiodo = $_SESSION['selectperiodo'];

                $rol_number = $_SESSION['user_rol'];
                $grado = $_SESSION['cal_grado'];
                $dni = $_SESSION['user_dni'];


                // $sql = "select * from calificaciones_r cr join grado g on cr.grado = g.id where cr.curso like '$selectcurso' and cr.tipo like '$selecttipo' and g.id='$grado'";
                $sql = "select c.indice,c.alumno,c.nota,c.grado,c.justificacion,c.periodo from conducta c where alumno like '%" . $selectalumnos . "%' and periodo like '%" . $selectperiodo . "%' and c.grado =" . $_SESSION['cal_grado'] . " order by alumno asc";

                $contador = 0;
                $result = mysqli_query(DBi::$mysqli, $sql);
                while ($ver = mysqli_fetch_row($result)) {
                    $contador = $contador + 1;
                    ?>
                    <tr>
                        <td><?php echo $ver[1] ?></td>
                        <td ><b><input style="width:100%" type="number" min="1" max="20" pattern="^[0-9]+" maxlength="2" id="id_nota<?php echo $contador ?>" name="id_nota<?php echo $contador ?>" value="<?php echo $ver[2] ?>"></b></td>
                        <td><?php echo $ver[4] ?></td>
                        <td><?php echo $ver[5] ?></td>
                    <input type="hidden" id="id_alumno_conducta<?php echo $contador ?>" name="id_alumno_conducta<?php echo $contador ?>" value="<?php echo $ver[0] ?>">
                   
                    </tr>
                    <?php
                }
                ?>
                      <input id="contador" name="contador" type="hidden" value="<?php echo $contador ?>" readonly="">
       
            </table>
        </form>


    </div>
</div>
