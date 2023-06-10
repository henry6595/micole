<?php
session_start();
require '../../../conexionbd/connectDB.php';

$sql = "select c.indice,c.curso,c.nota,c.tipo,c.fecha from calificaciones c where c.dni_estudiante='".$_SESSION['user_dni']."' and c.grado=".$_SESSION['grado_id']."";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $Id = $row[0];
      
        $myDate3 = new DateTime($row[4]);
        $formatFI3 = $myDate3->format('d/m/Y');
        

        $output['data'][] = array(
            //curso
            $row[1],
            //tipo
            $row[3],
            //nota
            $row[2],
            //fecha	
            $formatFI3
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);
