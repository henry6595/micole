<?php

require_once "../../../conexionbd/connectDB.php";
        $id=$_POST['id'];
	
	$sql="call generar_horario()";
	
	echo $result=mysqli_query(DBi::$mysqli,$sql);

?>