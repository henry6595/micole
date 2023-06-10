<?php

require_once "../../../conexionbd/connectDB.php";
session_start();


$contador = $_POST["contador"];

$dni = $_SESSION['dni'];

while ($contador > 0) {
    $alumno = $_POST["id_alumno_conducta" . $contador];
    $nota = $_POST["id_nota" . $contador];
    $contador = $contador - 1;
  
   
   $sql = 'UPDATE conducta c set c.nota="' . $nota . '" , c.dni_user="' . $dni . '" where c.indice='.$alumno;
   
    mysqli_query(DBi::$mysqli, $sql);
}


header("Location: ../conducta2.php?grado=".$_SESSION['cal_grado']."&accion='ver notas'&noti=1");
?>