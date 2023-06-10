<?php 
	session_start();

	$selecttipo=$_POST['valor'];

	$_SESSION['selecttipo']=$selecttipo;

	echo $selecttipo;

 ?>