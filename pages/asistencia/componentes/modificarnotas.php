<?php

require_once "../../../conexionbd/connectDB.php";
session_start();


$contador = $_POST["contador"];


while ($contador > 0) {
    $asistencia = $_POST["asistencia" . $contador];
    $id_asistencia_alumno = $_POST["id_asistencia_alumno" . $contador];
    $dni_estudiante = $_POST["dni_estudiante" . $contador];
    if ($asistencia == null) {
        $asistencia = 'NOASISTIO';
    } else {
        $asistencia = 'ASISTIO';
    }
    $contador = $contador - 1;
   
    $sql = 'UPDATE asistencia a set  a.asistencia="' . $asistencia . '" where a.indice = "' . $id_asistencia_alumno . '" and a.dni_estudiante ="' . $dni_estudiante. '" ';
   
    mysqli_query(DBi::$mysqli, $sql);
}


header("Location: ../asistencia2.php?grado=".$_SESSION['cal_grado']."&accion='ver notas'&noti=2");

?>