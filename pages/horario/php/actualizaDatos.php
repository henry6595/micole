<?php 
	require_once "../../../conexionbd/connectDB.php";
        
	$id=$_POST['idhora_horario'];
	$n=$_POST['hora_unicialu'];
	$a=$_POST['hora_finalu'];
	$e=$_POST['descripcionu'];
        $f=$_POST['ordenu'];

	$sql="UPDATE hora_horario set hora_inicio='$n', hora_final='$a',descripcion='$e', orden='$f' where indice='$id'";
        
	echo $result=mysqli_query(DBi::$mysqli,$sql);

 ?>