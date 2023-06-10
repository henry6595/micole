<?php 
	session_start();
        
	$selectalumnos=$_POST['valor'];

	$_SESSION['selectalumnos']=$selectalumnos;

	echo $selectalumnos;

 ?>