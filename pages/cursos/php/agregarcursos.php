<?php 

	require_once "../../../conexionbd/connectDB.php";
        
	$c=$_POST['curso'];
	$d=$_POST['descripcion'];

	$sql="INSERT into cursos (curso,descripcion) values ('$c','$d')";
	echo $result=mysqli_query(DBi::$mysqli,$sql);
       
 ?>