<?php

require '../conexionbd/connectDB.php';

$sql = "SELECT id,titulo,descripcion,imagen,palabra_clave,fecha from noticias order by fecha desc";
$path2 = "https://micole.com.es/AndresBello/pages/imagenes_galeria/";

$result = DBi::$mysqli->query($sql);

$output = array('noticias' => array());

while ($row = $result->fetch_array()) {


    $output['noticias'][] = array(
        "titulo" => $row[1],
        "descripcion" => $row[2],
        "imagen" => $path2 . $row[3] . ".jpg",
        "fecha" => $row[5]
    );
} // /while 


$json_output = json_encode($output);
echo $json_output;
?>