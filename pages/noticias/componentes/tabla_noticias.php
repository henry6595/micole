<?php require '../../../conexionbd/connectDB.php'; 
 session_start();
?>
<div class="row">
    <div class="col-sm-12 table-responsive">
        <table style="width: 100%;text-align:center;vertical-align:middle" class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevaNoticia">
                    Agregar nuevo 
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <tr style="background-color:#04B431; color: white; font-weight: bold">
                <td>Titulo</td>
                <td>Palabra Clave</td>
                <td>Imagen</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
            if (isset($_SESSION['consulta'])) {
                if ($_SESSION['consulta'] > 0) {
                    $idp = $_SESSION['consulta'];
                    $sql = "SELECT id,titulo,descripcion,imagen,palabra_clave from noticias where id='$idp' order by fecha desc";
                } else {
                    $sql = "SELECT id,titulo,descripcion,imagen,palabra_clave from noticias order by fecha desc";
                }
            } else {
                
                $sql = "SELECT id,titulo,descripcion,imagen,palabra_clave from noticias order by fecha desc";
            }

            $result = mysqli_query(DBi::$mysqli, $sql);
            while ($ver = mysqli_fetch_row($result)) {

                $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3] . "||" .
                        $ver[4];
                
                
                ?>
    
                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[4] ?></td>
                    <td><img SRC="../imagenes_galeria/<?php echo $ver[3] ?>.jpg" WIDTH=100 HEIGHT=50></td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditarNoticia" onclick="agregaform('<?php echo $datos ?>')"></button>
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