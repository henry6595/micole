<?php
require '../../../../conexionbd/connectDB.php';
$titulo = $_POST['titulo'];
$palabra_clave = $_POST['palabra_clave'];
$descripcion = $_POST['descripcion'];
$nombre_imagen = $_POST['nombre_imagen'];

$sql = "INSERT into noticias (titulo,palabra_clave,descripcion,imagen,fecha) values ('$titulo','$palabra_clave','$descripcion','$nombre_imagen',curdate())";
echo $result = mysqli_query(DBi::$mysqli, $sql);
?>