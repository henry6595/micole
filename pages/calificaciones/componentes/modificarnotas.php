<?php
require_once "../../../conexionbd/connectDB.php";
session_start();

$contador = $_POST["contador"];

$dni = $_SESSION['dni'];

while ($contador > 0) {
    $alumno = $_POST["alumno" . $contador];
    $nota = $_POST["numero" . $contador];
    $contador = $contador - 1;
    if ($_SESSION['rol_number'] == 4) {
     $sql = 'UPDATE calificaciones c set  c.nota="' . $nota . '" where c.alumno ="' . $alumno . '" and c.curso = "' . $_SESSION['id_curso'] . '" and c.grado ="' . $_SESSION['id_grado'] . '" and c.tipo = "' . $_SESSION['id_tipo'] . '" and c.fecha="' . $_SESSION['id_fecha'] . '" and c.dni_user="' . $_SESSION['dni'] . '"';
   } else {
    $sql = 'UPDATE calificaciones c set  c.nota="' . $nota . '" where c.alumno ="' . $alumno . '" and c.curso = "' . $_SESSION['id_curso'] . '" and c.grado ="' . $_SESSION['id_grado'] . '" and c.tipo = "' . $_SESSION['id_tipo'] . '" and c.fecha="' . $_SESSION['id_fecha'] . '"';
   }
    mysqli_query(DBi::$mysqli, $sql);
}


header("Location: ../calificaciones2.php?grado=".$_SESSION['cal_grado']."&accion='ver notas'&noti=2");

?>