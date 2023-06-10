<?php

require_once "../../../conexionbd/connectDB.php";

$n = $_POST['hora_inicial'];
$a = $_POST['hora_final'];
$e = $_POST['descripcion'];
$f = $_POST['orden'];

$sql = "INSERT into hora_horario (hora_inicio,hora_final,descripcion,orden)
								values ('$n','$a','$e','$f')";
echo $result = mysqli_query(DBi::$mysqli, $sql);
?>