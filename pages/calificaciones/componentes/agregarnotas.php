<?php
session_start();
require_once "../../../conexionbd/connectDB.php";

$dni = $_SESSION['user_dni']; 
$contador = $_POST["contador"] ;
$descripcion_tipo = $_POST["descripcion_tipo"] ;
$tipo = $_POST["tipo"] ;
$curso = $_POST["curso"] ;

$cal_grado = $_SESSION['cal_grado'];
$cal_accion = $_SESSION['cal_accion'];

while ($contador > 0) { 
    $alumno = $_POST["alumno".$contador];
    $nota =  $_POST["numero".$contador];
    $dni_estudiante =  $_POST["dni_estudiante".$contador];
    $contador =$contador -1;
    $sql="INSERT into calificaciones (alumno,nota,curso,grado,descripcion,tipo, fecha,dni_user,dni_estudiante) values ('$alumno','$nota','$curso','$cal_grado','$descripcion_tipo','$tipo',CURDATE(),'$dni','$dni_estudiante')";
    mysqli_query(DBi::$mysqli,$sql);
}


$sql2="INSERT into calificaciones_r (curso,grado,tipo, fecha,dni) values ('$curso','$cal_grado','$tipo',CURDATE(),'$dni')";
    mysqli_query(DBi::$mysqli,$sql2);
					
    
/*echo '<script>window.location.replace("../calificaciones2.php?grado="<?php echo $cal_grado; ?>"&accion="ver notas"&noti=2");</script>';
/*header("Location: ../calificaciones2.php?grado=".$_SESSION['cal_grado']."&accion='ver notas'&noti=2");*/
?>

<script type="text/javascript">
    var grado = '<?php echo $cal_grado;?>';
    console.log(grado);
    window.location.replace("../calificaciones2.php?grado="+grado+"&accion='ver notas'&noti=2");
</script>