
<?php 
	require_once "../../../conexionbd/connectDB.php";
	
	$id=$_POST['id'];

	$sql="DELETE from cursos where indice='$id'";
	echo $result=mysqli_query(DBi::$mysqli,$sql);
 ?>