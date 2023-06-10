<?php

session_start();
$mensaje_correo = $_POST["mensaje"];
$asunto = $_POST["asunto"];

$num_correos = count($_SESSION['array_email']);

$num_dni_dest = count($_SESSION['array_dest_dni']);

require_once "../../conexionbd/connectDB.php";

for ($i = 0; $i < $num_dni_dest; $i++) {

    $sql = "INSERT into notificaciones (mensaje,asunto,remitente,destinatario,fecha) values ('$mensaje_correo','$asunto'," . $_SESSION['user_dni'] . ",".$_SESSION['array_dest_dni'][$i] .",CURDATE())";
    mysqli_query(DBi::$mysqli, $sql);
}


header("Location: notificaciones.php?noti=2");
?>


