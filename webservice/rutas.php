<?php

require '../conexionbd/connectDB.php';

$sql = "SELECT * from we_service_colegios_url";

$result = DBi::$mysqli->query($sql);

$output = array('colegios' => array());

while ($row = $result->fetch_array()) {
    

        $output['colegios'][] = array(
            "colegio" => $row[1],	
            "end_point" =>$row[2],
            "imagen_url" =>$row[3]
            
        );
    } // /while 


$json_output = json_encode($output);
echo $json_output;

?>