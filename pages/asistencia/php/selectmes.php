<?php 
	session_start();

	$selectmes=$_POST['valor'];

	$_SESSION['selectmes']=$selectmes;

	echo $selectmes;

 ?>