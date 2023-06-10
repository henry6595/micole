<?php 	

require '../../../../conexionbd/connectDB.php';



$valid['success'] = array('success' => false, 'messages' => array());

$userId = $_POST['userId'];

if($userId) { 

 $sql = "call removerUser('$userId')";

 if(DBi::$mysqli->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Bloqueado exitosamente";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error no se ha podido eliminar";
 }
 
 DBi::$mysqli->close();

 echo json_encode($valid);
 
} // /if $_POST