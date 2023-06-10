<?php 
	session_start();

	$selectperiodo=$_POST['valor'];

	$_SESSION['selectperiodo']=$selectperiodo;

	echo $selectperiodo;

 ?>