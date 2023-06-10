<?php
require '../../../../conexionbd/connectDB.php';
$e_id = $_POST['e_id'];
$e_titulo = $_POST['e_titulo'];
$e_palabra_clave = $_POST['e_palabra_clave'];
$e_descripcion = $_POST['e_descripcion'];
$e_nombre_imagen = $_POST['e_nombre_imagen'];

$sql = "UPDATE noticias set titulo='$e_titulo',palabra_clave='$e_palabra_clave',descripcion='$e_descripcion',imagen='$e_nombre_imagen',fecha=curdate() where id=$e_id";
echo $result = mysqli_query(DBi::$mysqli, $sql);
?>  