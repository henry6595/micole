<?php
session_start();
require '../../../conexionbd/connectDB.php';
$path2 = "../../pages/imagenes_galeria/";
?>

    <div class="col-sm-12 table-responsive">
        <br>
        <center>
            <table  style="width: 95%;text-align:center;" class="table  table-hover table-condensed table-bordered">

                <tr style="background-color:orange">
                    <td WIDTH="9%"><b>foto</b></td>
                    <td WIDTH="20%"><b>Nombres</b></td>
                    <td WIDTH="40%">correo</td>
                    <td WIDTH="15%">celular</td>
                    <td WIDTH="10%">Rol</td>	
                </tr>

                <?php
                $sql = "select CONCAT(l.nombres,', ',l.apellidos), l.email, l.celular,l.dni,ru.rol_name from login l join roles_usuarios ru on ru.ID = l.rol where rol not in (1,7)  order by l.rol asc";


                $result = mysqli_query(DBi::$mysqli, $sql);
                while ($ver = mysqli_fetch_row($result)) {
                    ?>


                    <tr>
                        <td>
                            <?php
                            $foto_perfil = "../../../pages/usuarios/fotos_perfil/" . $ver[3] . ".jpeg";
                
                            if (file_exists($foto_perfil)) {
                                ?>
                                <img width="90" height="90" class="img-circle" alt="perfil" src="../../pages/usuarios/fotos_perfil/<?php echo $ver[3] . ".jpeg" ?>" >
                            <?php } else { ?>
                                <img width="90" height="90" class="img-circle" alt="User Image" src="../../assests/images/usuario.png" >

                            <?php } ?> 
                        </td>
                    
                        <td><?php echo $ver[0] ?></td>
                        <td><?php echo $ver[1] ?></td>
                        <td><?php echo $ver[2] ?></td>
                        <td><?php echo $ver[4] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </center>
    </div>
