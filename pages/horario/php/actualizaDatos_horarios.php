<?php 
	require_once "../../../conexionbd/connectDB.php";
        
	$id=$_POST['id_horario'];
	$a=$_POST['turnou'];
	$b=$_POST['cursou'];
	$c=$_POST['docenteu'];
        $d=$_POST['gradou'];
        $e=$_POST['diau'];

	$sql="UPDATE horario set curso='$b', docente='$c' where indice='$id'";
        
	echo $result=mysqli_query(DBi::$mysqli,$sql);

 ?>