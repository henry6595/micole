<?php
require_once "../../../conexionbd/connectDB.php";
session_start();

$dni = $_SESSION['user_dni']; 
$contador = $_POST["contador"] ;
$periodo = $_POST["periodo"] ;

$cal_grado = $_SESSION['cal_grado'];
$cal_accion = $_SESSION['cal_accion'];

while ($contador > 0) { 
    $alumno = $_POST["alumno".$contador];
    $nota =  $_POST["numero".$contador];
    $justificacion =  $_POST["justificacion".$contador];
    $dni_estudiante =  $_POST["dni_estudiante".$contador];
    $contador =$contador -1;
    $sql="INSERT into conducta (alumno,nota,grado,justificacion,periodo, fecha,dni_user,dni_estudiantes) values ('$alumno','$nota','$cal_grado','$justificacion','$periodo',CURDATE(),'$dni','$dni_estudiante')";
    mysqli_query(DBi::$mysqli,$sql);
}
echo '<script type="text/javascript">
    alertify.success("Notas agregadas Satisfactoriamente");
    </script>';
							
	header("Location: ../conducta2.php?grado=".$_SESSION['cal_grado']."&accion='ver notas'&noti=2");
?>