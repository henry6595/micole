<?php 
	session_start();

	$selectcurso=$_POST['valor'];

	$_SESSION['selectcurso']=$selectcurso;

	echo $selectcurso;

 ?>