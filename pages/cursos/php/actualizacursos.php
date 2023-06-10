<?php 
	require_once "../../../conexionbd/connectDB.php";
        
	$id=$_POST['idcurso_edt'];
	$c=$_POST['cursoc'];
	$d=$_POST['descripcionc'];

	$sql="UPDATE cursos set curso='$c', descripcion='$d' where indice='$id'";
        
	echo $result=mysqli_query(DBi::$mysqli,$sql);

 ?>